import { Link } from 'react-router-dom';
import Rating from './Rating';

const ProductCard = ({ product }) => {
  const price = parseFloat(product.price);
  const discountPrice = product.discountPrice ? parseFloat(product.discountPrice) : null;

  return (
    <Link to={`/products/${product.id}`} className="group bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden hover:shadow-lg transition duration-300">
      <div className="relative overflow-hidden">
        <img
          src={product.image || '/placeholder.svg'}
          alt={product.name}
          onError={(e) => { e.target.onerror = null; e.target.src = '/placeholder.svg'; }}
          className="w-full h-56 object-cover group-hover:scale-105 transition duration-300"
        />
        {discountPrice && (
          <span className="absolute top-3 left-3 bg-red-500 text-white text-xs px-2 py-1 rounded-full font-medium">
            -{Math.round(((price - discountPrice) / price) * 100)}%
          </span>
        )}
        {product.websiteName && (
          <span className="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-700 text-xs px-2 py-1 rounded-full font-medium">
            {product.websiteName}
          </span>
        )}
      </div>

      <div className="p-4">
        <p className="text-xs text-indigo-600 font-medium mb-1">{product.category?.name}</p>
        <h3 className="text-gray-900 font-semibold text-sm mb-2 line-clamp-2 group-hover:text-indigo-600 transition">
          {product.name}
        </h3>
        <Rating value={product.rating} count={product.numReviews} />
        <div className="flex items-center justify-between mt-3">
          <div className="flex items-center space-x-2">
            {discountPrice ? (
              <>
                <span className="text-lg font-bold text-gray-900">${discountPrice.toFixed(2)}</span>
                <span className="text-sm text-gray-400 line-through">${price.toFixed(2)}</span>
              </>
            ) : (
              <span className="text-lg font-bold text-gray-900">${price.toFixed(2)}</span>
            )}
          </div>
          <span className="p-2 bg-indigo-50 text-indigo-600 rounded-lg group-hover:bg-indigo-600 group-hover:text-white transition">
            <svg className="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
            </svg>
          </span>
        </div>
      </div>
    </Link>
  );
};

export default ProductCard;
