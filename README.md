# ShopHub - E-commerce Store

A full-featured e-commerce web application built with React, Express, and MySQL.

## Tech Stack

**Frontend:** React 18, Vite, Tailwind CSS, React Router DOM, Axios, React Hot Toast

**Backend:** Express, Sequelize ORM, MySQL, JWT Authentication, bcryptjs

**Payments:** PayPal Integration

## Features

- Product browsing with search, filtering, and pagination
- Product detail pages with reviews and ratings
- User authentication (Email, Phone OTP, Google SSO)
- User profile management
- Admin dashboard with product, category, and user management
- Image uploads
- PayPal checkout integration
- Role-based access control (User / Admin)

## Project Structure

```
├── client/                 # React frontend (Vite)
│   ├── src/
│   │   ├── api/            # Axios configuration
│   │   ├── components/     # Reusable components
│   │   ├── context/        # React Context (Auth)
│   │   └── pages/          # Page components
│   │       └── admin/      # Admin pages
│   └── .env                # Client environment variables
│
├── server/                 # Express backend
│   ├── config/             # Database configuration
│   ├── middleware/          # Auth & admin middleware
│   ├── models/             # Sequelize models
│   ├── routes/             # API routes
│   ├── seeders/            # Database seed data
│   └── .env                # Server environment variables
│
└── package.json            # Root scripts (concurrently)
```

## Prerequisites

- Node.js (v16+)
- MySQL

## Setup

### 1. Clone and install dependencies

```bash
npm run install-all
```

This installs dependencies for the root, server, and client.

### 2. Configure environment variables

**Server** (`server/.env`):

```env
PORT=5000
DB_HOST=localhost
DB_USER=your_db_user
DB_PASSWORD=your_db_password
DB_NAME=claude_ecommerce
JWT_SECRET=your_jwt_secret_key
PAYPAL_CLIENT_ID=your_paypal_client_id
PAYPAL_CLIENT_SECRET=your_paypal_client_secret
```

**Client** (`client/.env`):

```env
VITE_GOOGLE_CLIENT_ID=your_google_client_id
```

### 3. Create the MySQL database

```sql
CREATE DATABASE claude_ecommerce;
```

Tables are auto-created by Sequelize on server start.

### 4. Seed the database (optional)

```bash
npm run seed
```

This populates the database with sample categories, products, and demo user accounts.

### 5. Start development servers

```bash
npm run dev
```

This runs both the backend (port 5000) and frontend (port 3000) concurrently.

## Demo Credentials

After running `npm run seed`, you can log in with the following accounts:

| Role  | Email               | Password      |
| ----- | ------------------- | ------------- |
| Admin | admin@example.com   | admin123      |
| User  | john@example.com    | password123   |

> The **Admin** account has access to the admin dashboard for managing products, categories, and users.

## API Endpoints

### Auth

| Method | Endpoint              | Description                    |
| ------ | --------------------- | ------------------------------ |
| POST   | `/api/auth/register`  | Register with email & password |
| POST   | `/api/auth/login`     | Login with email & password    |
| POST   | `/api/auth/send-otp`  | Send OTP to phone number       |
| POST   | `/api/auth/verify-otp`| Verify OTP & register/login    |
| POST   | `/api/auth/sso/google`| Google SSO sign-in             |
| GET    | `/api/auth/me`        | Get current user (protected)   |
| PUT    | `/api/auth/profile`   | Update profile (protected)     |

### Products

| Method | Endpoint              | Description              |
| ------ | --------------------- | ------------------------ |
| GET    | `/api/products`       | List products            |
| GET    | `/api/products/:id`   | Get product details      |
| POST   | `/api/products`       | Create product (admin)   |
| PUT    | `/api/products/:id`   | Update product (admin)   |
| DELETE | `/api/products/:id`   | Delete product (admin)   |

### Categories

| Method | Endpoint              | Description               |
| ------ | --------------------- | ------------------------- |
| GET    | `/api/categories`     | List categories           |
| POST   | `/api/categories`     | Create category (admin)   |
| PUT    | `/api/categories/:id` | Update category (admin)   |
| DELETE | `/api/categories/:id` | Delete category (admin)   |

### Users (Admin)

| Method | Endpoint          | Description            |
| ------ | ----------------- | ---------------------- |
| GET    | `/api/users`      | List all users (admin) |
| DELETE | `/api/users/:id`  | Delete user (admin)    |

## Google SSO Setup

1. Go to [Google Cloud Console](https://console.cloud.google.com/)
2. Create a new project or select existing
3. Navigate to **APIs & Credentials** > **Create Credentials** > **OAuth Client ID**
4. Application type: **Web application**
5. Add `http://localhost:5173` to **Authorized JavaScript Origins**
6. Copy the Client ID into `client/.env`

## OTP Note

Phone OTP codes are currently logged to the server console. For production, integrate an SMS provider like Twilio.
