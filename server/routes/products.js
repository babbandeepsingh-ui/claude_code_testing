const express = require('express');
const { Op } = require('sequelize');
const { Product, Category, Review, User } = require('../models');
const { protect } = require('../middleware/auth');
const { admin } = require('../middleware/admin');

const router = express.Router();

// GET /api/products
router.get('/', async (req, res) => {
  try {
    const { search, category, minPrice, maxPrice, sort, page = 1, limit = 12, featured } = req.query;

    const where = {};
    if (search) {
      where.name = { [Op.like]: `%${search}%` };
    }
    if (category) {
      where.categoryId = category;
    }
    if (minPrice || maxPrice) {
      where.price = {};
      if (minPrice) where.price[Op.gte] = minPrice;
      if (maxPrice) where.price[Op.lte] = maxPrice;
    }
    if (featured === 'true') {
      where.featured = true;
    }

    let order = [['createdAt', 'DESC']];
    if (sort === 'price_asc') order = [['price', 'ASC']];
    if (sort === 'price_desc') order = [['price', 'DESC']];
    if (sort === 'rating') order = [['rating', 'DESC']];
    if (sort === 'newest') order = [['createdAt', 'DESC']];

    const offset = (parseInt(page) - 1) * parseInt(limit);

    const { count, rows } = await Product.findAndCountAll({
      where,
      include: [{ model: Category, as: 'category', attributes: ['id', 'name', 'slug'] }],
      order,
      limit: parseInt(limit),
      offset,
    });

    res.json({
      products: rows,
      page: parseInt(page),
      pages: Math.ceil(count / parseInt(limit)),
      total: count,
    });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// GET /api/products/:id
router.get('/:id', async (req, res) => {
  try {
    const product = await Product.findByPk(req.params.id, {
      include: [
        { model: Category, as: 'category', attributes: ['id', 'name', 'slug'] },
        {
          model: Review,
          as: 'reviews',
          include: [{ model: User, as: 'user', attributes: ['id', 'name'] }],
          order: [['createdAt', 'DESC']],
        },
      ],
    });
    if (!product) {
      return res.status(404).json({ message: 'Product not found' });
    }
    res.json(product);
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/products (admin)
router.post('/', protect, admin, async (req, res) => {
  try {
    const { name, description, price, discountPrice, image, websiteName, externalLink, categoryId, featured } = req.body;
    const slug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');

    const product = await Product.create({
      name, slug, description, price, discountPrice, image,
      websiteName, externalLink,
      categoryId, featured: featured || false,
    });

    res.status(201).json(product);
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// PUT /api/products/:id (admin)
router.put('/:id', protect, admin, async (req, res) => {
  try {
    const product = await Product.findByPk(req.params.id);
    if (!product) {
      return res.status(404).json({ message: 'Product not found' });
    }

    const { name, description, price, discountPrice, image, websiteName, externalLink, categoryId, featured } = req.body;
    if (name) product.slug = name.toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, '');

    Object.assign(product, {
      name: name || product.name,
      description: description || product.description,
      price: price !== undefined ? price : product.price,
      discountPrice: discountPrice !== undefined ? discountPrice : product.discountPrice,
      image: image || product.image,
      websiteName: websiteName || product.websiteName,
      externalLink: externalLink !== undefined ? externalLink : product.externalLink,
      categoryId: categoryId || product.categoryId,
      featured: featured !== undefined ? featured : product.featured,
    });

    await product.save();
    res.json(product);
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// DELETE /api/products/:id (admin)
router.delete('/:id', protect, admin, async (req, res) => {
  try {
    const product = await Product.findByPk(req.params.id);
    if (!product) {
      return res.status(404).json({ message: 'Product not found' });
    }
    await product.destroy();
    res.json({ message: 'Product deleted' });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

// POST /api/products/:id/reviews
router.post('/:id/reviews', protect, async (req, res) => {
  try {
    const product = await Product.findByPk(req.params.id);
    if (!product) {
      return res.status(404).json({ message: 'Product not found' });
    }

    const existingReview = await Review.findOne({
      where: { productId: req.params.id, userId: req.user.id },
    });
    if (existingReview) {
      return res.status(400).json({ message: 'You already reviewed this product' });
    }

    const { rating, comment } = req.body;
    await Review.create({
      rating, comment, userId: req.user.id, productId: product.id,
    });

    // Update product rating
    const reviews = await Review.findAll({ where: { productId: product.id } });
    const avgRating = reviews.reduce((sum, r) => sum + r.rating, 0) / reviews.length;
    product.rating = avgRating.toFixed(2);
    product.numReviews = reviews.length;
    await product.save();

    res.status(201).json({ message: 'Review added' });
  } catch (error) {
    res.status(500).json({ message: error.message });
  }
});

module.exports = router;
