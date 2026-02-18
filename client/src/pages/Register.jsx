import { useState, useEffect, useCallback, useRef } from 'react';
import { Link, useNavigate, useLocation } from 'react-router-dom';
import { useAuth } from '../context/AuthContext';
import toast from 'react-hot-toast';

const GOOGLE_CLIENT_ID = import.meta.env.VITE_GOOGLE_CLIENT_ID;

const Register = () => {
  const [step, setStep] = useState('input'); // 'input' | 'phone-otp'
  const [phone, setPhone] = useState('');
  const [name, setName] = useState('');
  const [loading, setLoading] = useState(false);

  // Phone OTP fields
  const [otp, setOtp] = useState('');
  const [otpSent, setOtpSent] = useState(false);
  const [otpTimer, setOtpTimer] = useState(0);

  const googleBtnRef = useRef(null);
  const { sendOtp, verifyOtp, googleSSO } = useAuth();
  const navigate = useNavigate();
  const location = useLocation();
  const params = new URLSearchParams(location.search);
  const redirectParam = params.get('redirect');
  const redirectTo = redirectParam && redirectParam.startsWith('/') ? redirectParam : '/';

  // OTP countdown timer
  useEffect(() => {
    if (otpTimer <= 0) return;
    const interval = setInterval(() => {
      setOtpTimer((prev) => prev - 1);
    }, 1000);
    return () => clearInterval(interval);
  }, [otpTimer]);

  // Google Sign-In
  const handleGoogleCallback = useCallback(async (response) => {
    setLoading(true);
    try {
      await googleSSO(response.credential);
      toast.success('Account created successfully!');
      navigate(redirectTo);
    } catch (error) {
      toast.error(error.response?.data?.message || 'Google sign-in failed');
    } finally {
      setLoading(false);
    }
  }, [googleSSO, navigate, redirectTo]);

  useEffect(() => {
    if (!GOOGLE_CLIENT_ID) return;
    const existingScript = document.querySelector('script[src="https://accounts.google.com/gsi/client"]');
    if (!existingScript) {
      const script = document.createElement('script');
      script.src = 'https://accounts.google.com/gsi/client';
      script.async = true;
      script.defer = true;
      document.body.appendChild(script);
    }
  }, []);

  useEffect(() => {
    if (!GOOGLE_CLIENT_ID || !googleBtnRef.current) return;

    const renderButton = () => {
      if (window.google && googleBtnRef.current) {
        window.google.accounts.id.initialize({
          client_id: GOOGLE_CLIENT_ID,
          callback: handleGoogleCallback,
        });
        window.google.accounts.id.renderButton(googleBtnRef.current, {
          theme: 'outline',
          size: 'large',
          width: 350,
          text: 'signup_with',
        });
      }
    };

    if (window.google) {
      renderButton();
    } else {
      const interval = setInterval(() => {
        if (window.google) {
          clearInterval(interval);
          renderButton();
        }
      }, 100);
      return () => clearInterval(interval);
    }
  }, [step, handleGoogleCallback]);

  // Step 1: Continue with phone number
  const handleContinue = () => {
    const trimmed = phone.trim();
    if (!trimmed) {
      toast.error('Please enter your phone number');
      return;
    }
    setStep('phone-otp');
  };

  // Send OTP
  const handleSendOtp = async () => {
    setLoading(true);
    try {
      await sendOtp(phone.trim());
      setOtpSent(true);
      setOtpTimer(60);
      toast.success('OTP sent to your phone!');
    } catch (error) {
      toast.error(error.response?.data?.message || 'Failed to send OTP');
    } finally {
      setLoading(false);
    }
  };

  // Verify OTP
  const handleOtpSubmit = async (e) => {
    e.preventDefault();
    if (!name.trim()) { toast.error('Please enter your name'); return; }
    if (!otp || otp.length !== 6) { toast.error('Please enter a valid 6-digit OTP'); return; }
    setLoading(true);
    try {
      await verifyOtp(name, phone.trim(), otp);
      toast.success('Account created successfully!');
      navigate(redirectTo);
    } catch (error) {
      toast.error(error.response?.data?.message || 'OTP verification failed');
    } finally {
      setLoading(false);
    }
  };

  // Go back to step 1
  const handleBack = () => {
    setStep('input');
    setName('');
    setOtp('');
    setOtpSent(false);
    setOtpTimer(0);
  };

  const inputStyle = 'w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition';

  return (
    <div className="min-h-[80vh] flex items-center justify-center px-4 py-8">
      <div className="max-w-md w-full bg-white rounded-2xl shadow-sm border p-8">
        <div className="text-center mb-6">
          <h1 className="text-2xl font-bold text-gray-900">Create Account</h1>
          <p className="text-gray-500 mt-2">Join ShopHub today</p>
        </div>

        {/* Step 1: Phone number input */}
        {step === 'input' && (
          <div className="space-y-5">
            <div>
              <label className="block text-sm font-medium text-gray-700 mb-1">Mobile Number</label>
              <input
                type="tel"
                value={phone}
                onChange={(e) => setPhone(e.target.value)}
                onKeyDown={(e) => e.key === 'Enter' && handleContinue()}
                className={inputStyle}
                placeholder="+1234567890"
                autoFocus
              />
            </div>

            <button
              onClick={handleContinue}
              disabled={!phone.trim()}
              className="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition disabled:opacity-50 disabled:cursor-not-allowed"
            >
              Continue
            </button>

            {/* Divider */}
            <div className="relative">
              <div className="absolute inset-0 flex items-center">
                <div className="w-full border-t border-gray-200"></div>
              </div>
              <div className="relative flex justify-center text-sm">
                <span className="px-3 bg-white text-gray-400">or</span>
              </div>
            </div>

            {/* Google SSO Button */}
            {GOOGLE_CLIENT_ID ? (
              <div className="flex justify-center">
                <div ref={googleBtnRef}></div>
              </div>
            ) : (
              <button
                disabled
                className="w-full flex items-center justify-center gap-3 py-2.5 border border-gray-300 rounded-lg text-sm font-medium text-gray-400 cursor-not-allowed"
              >
                <svg className="w-5 h-5" viewBox="0 0 24 24">
                  <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92a5.06 5.06 0 0 1-2.2 3.32v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.1z"/>
                  <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                  <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                  <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                </svg>
                Sign up with Google
              </button>
            )}
          </div>
        )}

        {/* Step 2: Phone OTP */}
        {step === 'phone-otp' && (
          <form onSubmit={handleOtpSubmit} className="space-y-5">
            {/* Phone badge */}
            <div className="flex items-center gap-2 bg-gray-50 border border-gray-200 rounded-lg px-4 py-2.5">
              <svg className="w-4 h-4 text-gray-400 flex-shrink-0" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor">
                <path strokeLinecap="round" strokeLinejoin="round" d="M10.5 1.5H8.25A2.25 2.25 0 0 0 6 3.75v16.5a2.25 2.25 0 0 0 2.25 2.25h7.5A2.25 2.25 0 0 0 18 20.25V3.75a2.25 2.25 0 0 0-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3" />
              </svg>
              <span className="text-sm text-gray-600 truncate">{phone.trim()}</span>
              <button type="button" onClick={handleBack} className="ml-auto text-indigo-600 hover:text-indigo-700 text-xs font-medium flex-shrink-0">
                Change
              </button>
            </div>

            <div>
              <label className="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
              <input type="text" value={name} onChange={(e) => setName(e.target.value)} required className={inputStyle} placeholder="Enter your name" autoFocus />
            </div>

            {!otpSent ? (
              <button
                type="button"
                onClick={handleSendOtp}
                disabled={loading}
                className="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition disabled:opacity-50"
              >
                {loading ? 'Sending...' : 'Send OTP'}
              </button>
            ) : (
              <>
                <div>
                  <label className="block text-sm font-medium text-gray-700 mb-1">Enter OTP</label>
                  <input
                    type="text"
                    value={otp}
                    onChange={(e) => setOtp(e.target.value.replace(/\D/g, '').slice(0, 6))}
                    required
                    maxLength={6}
                    className="w-full px-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 focus:border-transparent outline-none transition text-center text-lg tracking-[0.5em]"
                    placeholder="------"
                    autoFocus
                  />
                  <div className="flex items-center justify-between mt-1.5">
                    <p className="text-xs text-gray-400">6-digit code sent to your phone</p>
                    <button
                      type="button"
                      onClick={handleSendOtp}
                      disabled={otpTimer > 0 || loading}
                      className="text-xs text-indigo-600 hover:text-indigo-700 font-medium disabled:text-gray-400"
                    >
                      {otpTimer > 0 ? `Resend in ${otpTimer}s` : 'Resend OTP'}
                    </button>
                  </div>
                </div>

                <button type="submit" disabled={loading} className="w-full bg-indigo-600 text-white py-2.5 rounded-lg font-medium hover:bg-indigo-700 transition disabled:opacity-50">
                  {loading ? 'Verifying...' : 'Verify & Create Account'}
                </button>
              </>
            )}
          </form>
        )}

        <p className="text-center text-sm text-gray-500 mt-6">
          Already have an account?{' '}
          <Link to={`/login${redirectTo !== '/' ? `?redirect=${encodeURIComponent(redirectTo)}` : ''}`} className="text-indigo-600 hover:underline font-medium">
            Sign In
          </Link>
        </p>
      </div>
    </div>
  );
};

export default Register;