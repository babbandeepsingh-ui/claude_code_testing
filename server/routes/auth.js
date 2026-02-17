const express = require('express');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');
const crypto = require('crypto');
const { User } = require('../models');
const { protect } = require('../middleware/auth');

const router = express.Router();

const generateToken = (id) => {
  return jwt.sign({ id }, process.env.JWT_SECRET, { expiresIn: '30d' });
};

// In-memory OTP store (use Redis in production)
const otpStore = new Map();

// POST /api/auth/register
router.post('/register', async (req, res) => {
  try {
    const { name, email, password } = req.body;

    if (!name || !name.trim()) {
      return res.status(400).json({ message: 'Name is required' });
    }
    if (!email || !email.trim()) {
      return res.status(400).json({ message: 'Email is required' });
    }
    if (!password || password.length < 6) {
      return res.status(400).json({ message: 'Password must be at least 6 characters' });
    }

    const existingUser = await User.findOne({ where: { email: email.trim() } });
    if (existingUser) {
      return res.status(400).json({ message: 'User already exists' });
    }

    const user = await User.create({ name: name.trim(), email: email.trim(), password });

    res.status(201).json({
      id: user.id,
      name: user.name,
      email: user.email,
      role: user.role,
      token: generateToken(user.id),
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/auth/send-otp
router.post('/send-otp', async (req, res) => {
  try {
    const { phone } = req.body;

    if (!phone) {
      return res.status(400).json({ message: 'Phone number is required' });
    }

    // Generate 6-digit OTP
    const otp = crypto.randomInt(100000, 999999).toString();

    // Store OTP with 5-minute expiration
    otpStore.set(phone, {
      otp,
      expiresAt: Date.now() + 5 * 60 * 1000,
    });

    // In production, send OTP via SMS service (Twilio, etc.)
    console.log(`[OTP] Code for ${phone}: ${otp}`);

    res.json({ message: 'OTP sent successfully' });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/auth/verify-otp
router.post('/verify-otp', async (req, res) => {
  try {
    const { name, phone, otp } = req.body;

    if (!phone || !otp) {
      return res.status(400).json({ message: 'Phone and OTP are required' });
    }

    const stored = otpStore.get(phone);

    if (!stored) {
      return res.status(400).json({ message: 'OTP not found. Please request a new one' });
    }

    if (Date.now() > stored.expiresAt) {
      otpStore.delete(phone);
      return res.status(400).json({ message: 'OTP has expired. Please request a new one' });
    }

    if (stored.otp !== otp) {
      return res.status(400).json({ message: 'Invalid OTP' });
    }

    // OTP verified, clean up
    otpStore.delete(phone);

    // Check if user with this phone already exists
    let user = await User.findOne({ where: { phone } });

    if (user) {
      // Existing user - log them in
      return res.json({
        id: user.id,
        name: user.name,
        email: user.email,
        phone: user.phone,
        role: user.role,
        token: generateToken(user.id),
      });
    }

    // New user - register
    if (!name) {
      return res.status(400).json({ message: 'Name is required for new registration' });
    }

    user = await User.create({
      name,
      phone,
      authProvider: 'phone',
    });

    res.status(201).json({
      id: user.id,
      name: user.name,
      email: user.email,
      phone: user.phone,
      role: user.role,
      token: generateToken(user.id),
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/auth/sso/google
router.post('/sso/google', async (req, res) => {
  try {
    const { credential } = req.body;

    if (!credential) {
      return res.status(400).json({ message: 'Google credential is required' });
    }

    // Decode the Google JWT token (ID token)
    // In production, verify with Google's API or use google-auth-library
    const parts = credential.split('.');
    if (parts.length !== 3) {
      return res.status(400).json({ message: 'Invalid Google credential' });
    }

    const payload = JSON.parse(Buffer.from(parts[1], 'base64').toString());
    const { sub: googleId, email, name } = payload;

    if (!email) {
      return res.status(400).json({ message: 'Email not found in Google account' });
    }

    // Check if user exists with this Google ID
    let user = await User.findOne({ where: { authProviderId: googleId, authProvider: 'google' } });

    if (user) {
      return res.json({
        id: user.id,
        name: user.name,
        email: user.email,
        role: user.role,
        token: generateToken(user.id),
      });
    }

    // Check if user exists with same email
    user = await User.findOne({ where: { email } });

    if (user) {
      // Link Google account to existing user
      user.authProvider = 'google';
      user.authProviderId = googleId;
      await user.save();

      return res.json({
        id: user.id,
        name: user.name,
        email: user.email,
        role: user.role,
        token: generateToken(user.id),
      });
    }

    // Create new user
    user = await User.create({
      name: name || email.split('@')[0],
      email,
      authProvider: 'google',
      authProviderId: googleId,
    });

    res.status(201).json({
      id: user.id,
      name: user.name,
      email: user.email,
      role: user.role,
      token: generateToken(user.id),
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/auth/login
router.post('/login', async (req, res) => {
  try {
    const { email, password } = req.body;

    const user = await User.findOne({ where: { email } });
    if (!user || !(await user.matchPassword(password))) {
      return res.status(401).json({ message: 'Invalid email or password' });
    }

    res.json({
      id: user.id,
      name: user.name,
      email: user.email,
      role: user.role,
      token: generateToken(user.id),
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// GET /api/auth/me
router.get('/me', protect, async (req, res) => {
  res.json(req.user);
});

// PUT /api/auth/profile
router.put('/profile', protect, async (req, res) => {
  try {
    const user = await User.findByPk(req.user.id);
    const { name, email, phone, address, city, postalCode, country, password } = req.body;

    user.name = name || user.name;
    user.email = email || user.email;
    user.phone = phone !== undefined ? phone : user.phone;
    user.address = address !== undefined ? address : user.address;
    user.city = city !== undefined ? city : user.city;
    user.postalCode = postalCode !== undefined ? postalCode : user.postalCode;
    user.country = country !== undefined ? country : user.country;

    if (password) {
      const salt = await bcrypt.genSalt(10);
      user.password = await bcrypt.hash(password, salt);
    }

    await user.save();

    res.json({
      id: user.id,
      name: user.name,
      email: user.email,
      role: user.role,
      phone: user.phone,
      address: user.address,
      city: user.city,
      postalCode: user.postalCode,
      country: user.country,
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

module.exports = router;
