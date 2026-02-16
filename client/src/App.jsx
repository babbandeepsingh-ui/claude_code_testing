import { Routes, Route } from 'react-router-dom';
import { Toaster } from 'react-hot-toast';
import Navbar from './components/Navbar';
import Footer from './components/Footer';
import ProtectedRoute from './components/ProtectedRoute';
import AdminRoute from './components/AdminRoute';
import Home from './pages/Home';
import Products from './pages/Products';
import ProductDetail from './pages/ProductDetail';
import Profile from './pages/Profile';
import Login from './pages/Login';
import Register from './pages/Register';
import Dashboard from './pages/admin/Dashboard';
import ProductList from './pages/admin/ProductList';
import ProductForm from './pages/admin/ProductForm';
import UserList from './pages/admin/UserList';
import CategoryList from './pages/admin/CategoryList';

function App() {
  return (
    <div className="min-h-screen flex flex-col bg-gray-50">
      <Toaster position="top-right" />
      <Navbar />
      <main className="flex-1">
        <Routes>
          <Route path="/" element={<Home />} />
          <Route path="/products" element={<Products />} />
          <Route path="/products/:id" element={<ProductDetail />} />
          <Route path="/login" element={<Login />} />
          <Route path="/register" element={<Register />} />

          <Route path="/profile" element={<ProtectedRoute><Profile /></ProtectedRoute>} />

          <Route path="/admin" element={<AdminRoute><Dashboard /></AdminRoute>} />
          <Route path="/admin/products" element={<AdminRoute><ProductList /></AdminRoute>} />
          <Route path="/admin/products/new" element={<AdminRoute><ProductForm /></AdminRoute>} />
          <Route path="/admin/products/:id/edit" element={<AdminRoute><ProductForm /></AdminRoute>} />
          <Route path="/admin/users" element={<AdminRoute><UserList /></AdminRoute>} />
          <Route path="/admin/categories" element={<AdminRoute><CategoryList /></AdminRoute>} />
        </Routes>
      </main>
      <Footer />
    </div>
  );
}

export default App;
