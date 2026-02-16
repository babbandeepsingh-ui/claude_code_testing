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

  const login = async (email, password) => {
    const { data } = await API.post('/auth/login', { email, password });
    setUser(data);
    localStorage.setItem('user', JSON.stringify(data));
    return data;
  };

  const register = async (name, email, password) => {
    const { data } = await API.post('/auth/register', { name, email, password });
    setUser(data);
    localStorage.setItem('user', JSON.stringify(data));
    return data;
  };

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
    const updated = { ...user, ...data };
    setUser(updated);
    localStorage.setItem('user', JSON.stringify(updated));
    return data;
  };

  return (
    <AuthContext.Provider value={{ user, loading, login, register, sendOtp, verifyOtp, googleSSO, logout, updateProfile }}>
      {children}
    </AuthContext.Provider>
  );
};
