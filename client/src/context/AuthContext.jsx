import { createContext, useContext, useState, useEffect } from 'react';
import API from '../api/axios';

const AuthContext = createContext();

export const useAuth = () => useContext(AuthContext);

export const AuthProvider = ({ children }) => {
  const [user, setUser] = useState(null);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const stored = localStorage.getItem('user');
    if (stored) {
      setUser(JSON.parse(stored));
    }
    setLoading(false);
  }, []);

  const sendOtp = async (phone) => {
    const { data } = await API.post('/auth/send-otp', { phone });
    return data;
  };

  const verifyOtp = async (name, phone, otp) => {
    const { data } = await API.post('/auth/verify-otp', { name, phone, otp });
    setUser(data);
    localStorage.setItem('user', JSON.stringify(data));
    return data;
  };

  const googleSSO = async (credential) => {
    const { data } = await API.post('/auth/sso/google', { credential });
    setUser(data);
    localStorage.setItem('user', JSON.stringify(data));
    return data;
  };

  const logout = () => {
    setUser(null);
    localStorage.removeItem('user');
  };

  const updateProfile = async (profileData) => {
    const { data } = await API.put('/auth/profile', profileData);
    setUser((prev) => {
      if (!prev) return null;
      const updated = { ...prev, ...data };
      localStorage.setItem('user', JSON.stringify(updated));
      return updated;
    });
    return data;
  };

  return (
    <AuthContext.Provider value={{ user, loading, sendOtp, verifyOtp, googleSSO, logout, updateProfile }}>
      {children}
    </AuthContext.Provider>
  );
};
