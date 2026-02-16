const { DataTypes } = require('sequelize');
const sequelize = require('../config/db');

const Product = sequelize.define('Product', {
  id: {
    type: DataTypes.INTEGER,
    primaryKey: true,
    autoIncrement: true,
  },
  name: {
    type: DataTypes.STRING,
    allowNull: false,
  },
  slug: {
    type: DataTypes.STRING,
    allowNull: false,
    unique: true,
  },
  description: {
    type: DataTypes.TEXT,
    allowNull: false,
  },
  price: {
    type: DataTypes.DECIMAL(10, 2),
    allowNull: false,
  },
  discountPrice: {
    type: DataTypes.DECIMAL(10, 2),
    defaultValue: null,
  },
  image: {
    type: DataTypes.STRING,
    defaultValue: '',
  },
  websiteName: {
    type: DataTypes.STRING,
    allowNull: false,
    defaultValue: 'Amazon',
  },
  externalLink: {
    type: DataTypes.TEXT,
    allowNull: false,
    defaultValue: '',
  },
  rating: {
    type: DataTypes.DECIMAL(3, 2),
    defaultValue: 0,
  },
  numReviews: {
    type: DataTypes.INTEGER,
    defaultValue: 0,
  },
  featured: {
    type: DataTypes.BOOLEAN,
    defaultValue: false,
  },
  categoryId: {
    type: DataTypes.INTEGER,
    allowNull: false,
  },
}, {
  timestamps: true,
});

module.exports = Product;
