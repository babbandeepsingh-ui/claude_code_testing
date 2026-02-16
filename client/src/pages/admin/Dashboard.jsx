import { useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import API from '../../api/axios';

const Dashboard = () => {
  const [stats, setStats] = useState({ products: 0, users: 0, categories: 0 });
  const [recentProducts, setRecentProducts] = useState([]);
  const [loading, setLoading] = useState(true);

  useEffect(() => {
    const fetchStats = async () => {
      try {
        const [productsRes, usersRes, categoriesRes] = await Promise.all([
          API.get('/products?limit=5'),
          API.get('/users'),
          API.get('/categories'),
        ]);

        setStats({
          products: productsRes.data.total,
          users: usersRes.data.length,
          categories: categoriesRes.data.length,
        });
        setRecentProducts(productsRes.data.products);
      } catch (error) {
        console.error('Failed to fetch stats:', error);
      } finally {
        setLoading(false);
      }
    };
    fetchStats();
  }, []);

  if (loading) {
    return (
      <div className="flex items-center justify-center min-h-[60vh]">
        <div className="animate-spin rounded-full h-12 w-12 border-b-2 border-indigo-600"></div>
      </div>
    );
  }

  const statCards = [
    { label: 'Total Products', value: stats.products, icon: '🏷️', color: 'bg-purple-50 text-purple-700', link: '/admin/products' },
    { label: 'Total Users', value: stats.users, icon: '👥', color: 'bg-blue-50 text-blue-700', link: '/admin/users' },
    { label: 'Categories', value: stats.categories, icon: '📂', color: 'bg-green-50 text-green-700', link: '/admin/categories' },
  ];

  return (
    <div className="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div className="flex items-center justify-between mb-8">
        <h1 className="text-3xl font-bold text-gray-900">Admin Dashboard</h1>
      </div>

      {/* Quick Links */}
      <div className="flex flex-wrap gap-3 mb-8">
        <Link to="/admin/products" className="px-4 py-2 bg-white border rounded-lg text-sm hover:bg-gray-50">Products</Link>
        <Link to="/admin/users" className="px-4 py-2 bg-white border rounded-lg text-sm hover:bg-gray-50">Users</Link>
        <Link to="/admin/categories" className="px-4 py-2 bg-white border rounded-lg text-sm hover:bg-gray-50">Categories</Link>
        <Link to="/admin/products/new" className="px-4 py-2 bg-indigo-600 text-white rounded-lg text-sm hover:bg-indigo-700">+ New Product</Link>
      </div>

      {/* Stats */}
      <div className="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
        {statCards.map((card) => (
          <Link key={card.label} to={card.link} className="bg-white rounded-xl border p-6 hover:shadow-md transition">
            <div className="flex items-center justify-between mb-4">
              <span className={`px-3 py-1 rounded-lg text-sm font-medium ${card.color}`}>{card.icon}</span>
            </div>
            <p className="text-2xl font-bold text-gray-900">{card.value}</p>
            <p className="text-sm text-gray-500 mt-1">{card.label}</p>
          </Link>
        ))}
      </div>

      {/* Recent Products */}
      <div className="bg-white rounded-xl border overflow-hidden">
        <div className="flex items-center justify-between p-6 border-b">
          <h2 className="text-lg font-bold text-gray-900">Recent Products</h2>
          <Link to="/admin/products" className="text-sm text-indigo-600 hover:underline">View All</Link>
        </div>
        <div className="overflow-x-auto">
          <table className="w-full">
            <thead className="bg-gray-50">
              <tr>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Product</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Price</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Website</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Category</th>
                <th className="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Action</th>
              </tr>
            </thead>
            <tbody className="divide-y">
              {recentProducts.map((product) => (
                <tr key={product.id} className="hover:bg-gray-50">
                  <td className="px-6 py-4">
                    <div className="flex items-center gap-3">
                      <img src={product.image || '/placeholder.svg'} alt={product.name} onError={(e) => { e.target.onerror = null; e.target.src = '/placeholder.svg'; }} className="w-10 h-10 rounded object-cover" />
                      <span className="text-sm font-medium text-gray-900 line-clamp-1">{product.name}</span>
                    </div>
                  </td>
                  <td className="px-6 py-4 text-sm font-medium">${parseFloat(product.discountPrice || product.price).toFixed(2)}</td>
                  <td className="px-6 py-4">
                    <span className="px-2 py-1 bg-gray-100 rounded-full text-xs font-medium">{product.websiteName}</span>
                  </td>
                  <td className="px-6 py-4 text-sm text-gray-500">{product.category?.name}</td>
                  <td className="px-6 py-4">
                    <Link to={`/admin/products/${product.id}/edit`} className="text-indigo-600 hover:underline text-sm">Edit</Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  );
};

export default Dashboard;
