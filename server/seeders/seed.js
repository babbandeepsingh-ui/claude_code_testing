require('dotenv').config({ path: require('path').join(__dirname, '..', '.env') });
const { sequelize, User, Category, Product } = require('../models');

const seedData = async () => {
  try {
    await sequelize.sync({ force: true });
    console.log('Database synced');

    // Create admin user
    await User.create({
      name: 'Admin',
      email: 'admin@example.com',
      password: 'admin123',
      role: 'admin',
    });

    // Create regular user
    await User.create({
      name: 'John Doe',
      email: 'john@example.com',
      password: 'password123',
      role: 'user',
    });

    console.log('Users created');

    // Create categories
    const categories = await Category.bulkCreate([
      { name: 'Electronics', slug: 'electronics', description: 'Latest gadgets and electronic devices', image: 'https://images.unsplash.com/photo-1498049794561-7780e7231661?w=400' },
      { name: 'Clothing', slug: 'clothing', description: 'Fashion and apparel for everyone', image: 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400' },
      { name: 'Home & Garden', slug: 'home-garden', description: 'Everything for your home', image: 'https://images.unsplash.com/photo-1484101403633-562f891dc89a?w=400' },
      { name: 'Sports', slug: 'sports', description: 'Sports equipment and accessories', image: 'https://images.unsplash.com/photo-1461896836934-bd45ba24e308?w=400' },
      { name: 'Books', slug: 'books', description: 'Best selling books and literature', image: 'https://images.unsplash.com/photo-1495446815901-a7297e633e8d?w=400' },
    ]);

    console.log('Categories created');

    // Create products with external links
    await Product.bulkCreate([
      {
        name: 'Wireless Bluetooth Headphones',
        slug: 'wireless-bluetooth-headphones',
        description: 'Premium wireless headphones with active noise cancellation, 30-hour battery life, and superior sound quality.',
        price: 79.99,
        discountPrice: 59.99,
        image: 'https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.5, numReviews: 128, featured: true,
        categoryId: categories[0].id,
      },
      {
        name: 'Smart Watch Pro',
        slug: 'smart-watch-pro',
        description: 'Advanced smartwatch with health monitoring, GPS, water resistance, and a stunning AMOLED display.',
        price: 199.99,
        discountPrice: 169.99,
        image: 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400',
        websiteName: 'Meesho',
        externalLink: 'https://www.meesho.com',
        rating: 4.3, numReviews: 89, featured: true,
        categoryId: categories[0].id,
      },
      {
        name: 'Portable Power Bank 20000mAh',
        slug: 'portable-power-bank-20000mah',
        description: 'High-capacity power bank with fast charging, dual USB ports, and LED display.',
        price: 39.99,
        image: 'https://images.unsplash.com/photo-1609091839311-d5365f9ff1c5?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.1, numReviews: 45, featured: false,
        categoryId: categories[0].id,
      },
      {
        name: 'Wireless Keyboard & Mouse Combo',
        slug: 'wireless-keyboard-mouse-combo',
        description: 'Ergonomic wireless keyboard and mouse set with quiet keys, long battery life, and universal receiver.',
        price: 49.99,
        discountPrice: 39.99,
        image: 'https://images.unsplash.com/photo-1587829741301-dc798b83add3?w=400',
        websiteName: 'Flipkart',
        externalLink: 'https://www.flipkart.com',
        rating: 4.0, numReviews: 67, featured: false,
        categoryId: categories[0].id,
      },
      {
        name: 'Classic Leather Jacket',
        slug: 'classic-leather-jacket',
        description: 'Timeless leather jacket crafted from premium genuine leather with zippered pockets and slim-fit design.',
        price: 149.99,
        discountPrice: 119.99,
        image: 'https://images.unsplash.com/photo-1551028719-00167b16eac5?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.7, numReviews: 56, featured: true,
        categoryId: categories[1].id,
      },
      {
        name: 'Premium Cotton T-Shirt',
        slug: 'premium-cotton-tshirt',
        description: 'Ultra-soft 100% organic cotton t-shirt. Comfortable fit for everyday wear.',
        price: 29.99,
        image: 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400',
        websiteName: 'Meesho',
        externalLink: 'https://www.meesho.com',
        rating: 4.2, numReviews: 134, featured: false,
        categoryId: categories[1].id,
      },
      {
        name: 'Designer Sunglasses',
        slug: 'designer-sunglasses',
        description: 'Stylish UV400 protection sunglasses with polarized lenses and lightweight titanium frame.',
        price: 89.99,
        discountPrice: 69.99,
        image: 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400',
        websiteName: 'Flipkart',
        externalLink: 'https://www.flipkart.com',
        rating: 4.4, numReviews: 78, featured: true,
        categoryId: categories[1].id,
      },
      {
        name: 'Aromatherapy Candle Set',
        slug: 'aromatherapy-candle-set',
        description: 'Set of 6 hand-poured soy candles with essential oils. Long-lasting burn time.',
        price: 34.99,
        image: 'https://images.unsplash.com/photo-1602607714066-15601fe3261e?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.6, numReviews: 92, featured: false,
        categoryId: categories[2].id,
      },
      {
        name: 'Indoor Plant Collection',
        slug: 'indoor-plant-collection',
        description: 'Curated collection of 3 easy-care indoor plants in decorative ceramic pots.',
        price: 59.99,
        discountPrice: 49.99,
        image: 'https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=400',
        websiteName: 'Meesho',
        externalLink: 'https://www.meesho.com',
        rating: 4.8, numReviews: 45, featured: true,
        categoryId: categories[2].id,
      },
      {
        name: 'Yoga Mat Premium',
        slug: 'yoga-mat-premium',
        description: 'Extra thick non-slip yoga mat with alignment lines. Eco-friendly TPE material.',
        price: 44.99,
        discountPrice: 34.99,
        image: 'https://images.unsplash.com/photo-1601925260368-ae2f83cf8b7f?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.5, numReviews: 67, featured: true,
        categoryId: categories[3].id,
      },
      {
        name: 'Stainless Steel Water Bottle',
        slug: 'stainless-steel-water-bottle',
        description: 'Double-walled insulated water bottle. Keeps drinks cold 24hrs / hot 12hrs.',
        price: 24.99,
        image: 'https://images.unsplash.com/photo-1602143407151-7111542de6e8?w=400',
        websiteName: 'Flipkart',
        externalLink: 'https://www.flipkart.com',
        rating: 4.3, numReviews: 89, featured: false,
        categoryId: categories[3].id,
      },
      {
        name: 'The Art of Programming',
        slug: 'the-art-of-programming',
        description: 'A comprehensive guide to modern programming paradigms. Essential reading for developers.',
        price: 34.99,
        discountPrice: 27.99,
        image: 'https://images.unsplash.com/photo-1544716278-ca5e3f4abd8c?w=400',
        websiteName: 'Amazon',
        externalLink: 'https://www.amazon.com',
        rating: 4.9, numReviews: 203, featured: true,
        categoryId: categories[4].id,
      },
    ]);

    console.log('Products created');
    console.log('Seed data complete!');
    console.log('Admin login: admin@example.com / admin123');
    console.log('User login: john@example.com / password123');
    process.exit(0);
  } catch (error) {
    console.error('Seed error:', error);
    process.exit(1);
  }
};

seedData();
