# Pizza Ordering Platform (Laravel)

A full-featured pizza ordering and management system built with Laravel. This project supports user authentication, category/subcategory management, pizza CRUD, order processing, and a modern, responsive UI for both customers and admins. It also exposes a RESTful API and supports GraphQL queries/mutations.

---

## Features

- **User Authentication**: Registration, login, password reset, API token support
- **Admin Dashboard**: Manage categories, subcategories, pizzas, and view all purchases
- **Pizza Management**: CRUD for pizzas, including image upload and price by size
- **Category/Subcategory Management**: Organize pizzas by category and subcategory
- **Order System**: Users can buy pizzas, view their cart, and admins can view all purchases
- **RESTful API**: Endpoints for user auth and pizza CRUD
- **GraphQL API**: Flexible queries and mutations for advanced clients
- **Responsive UI**: Blade templates for admin and customer views

---

## Architecture Overview

- **Backend**: Laravel (PHP)
- **Frontend**: Blade templates, Bootstrap, jQuery
- **Database**: SQLite (default), easily swappable for MySQL/Postgres
- **API**: REST (routes/api.php) and GraphQL (app/GraphQL/)
- **Auth**: Laravel Auth, API tokens for mobile/SPA clients

---

## Project Structure

- `app/` – Models, controllers (auth, pizza, category, subcategory, buy, API, GraphQL)
- `resources/views/` – Blade templates for admin and customer UIs
- `routes/web.php` – Web routes (admin, pizza, category, subcategory, home)
- `routes/api.php` – REST API routes (register, login, pizza CRUD)
- `database/migrations/` – Table definitions for users, pizzas, categories, subcategories, purchases
- `database/seeds/` – Example data seeding

---

## REST API Endpoints

All API routes are prefixed with `/api`.

| Method | Endpoint           | Description                |
|--------|--------------------|----------------------------|
| POST   | /register          | Register a new user        |
| POST   | /login             | Login and get API token    |
| POST   | /logout            | Logout (invalidate token)  |
| GET    | /pizza             | List all pizzas            |
| GET    | /pizza/{id}        | Get pizza by ID            |
| POST   | /pizza             | Create new pizza           |
| PUT    | /pizza/{id}        | Update pizza               |
| DELETE | /pizza/{id}        | Delete pizza               |

Example pizza object:
```json
{
  "id": 5,
  "sub_id": 2,
  "pizza_name": "margrrrrrrit",
  "pizza_component": "{sealt,meat,checken}",
  "pizza_datiles": "gooooooooood",
  "pizza_image": "margrrit.jpg",
  "larg": 120,
  "medium": 90,
  "small": 90
}
```

---

## GraphQL API

- Located in `app/GraphQL/` (Types, Queries, Mutations)
- Supports querying users, categories, subcategories, pizzas, and updating user passwords
- Example queries/mutations: see `app/GraphQL/Query/` and `app/GraphQL/Mutation/`

---

## Database Schema

- **users**: id, name, email, password, api_token, etc.
- **categories**: id, category_name
- **sub_categories**: id, sub_name, category_id
- **pizzas**: id, sub_id, pizza_name, pizza_image, pizza_component, pizza_datiles, small, medium, larg
- **boughts**: id, user_id, pizza_id, price

See `database/migrations/` for full schema.

---

## Setup Instructions

1. **Clone the repo**
2. `cd old/Pizza`
3. `composer install`
4. `cp .env.example .env` and set DB connection (default: SQLite)
5. `php artisan key:generate`
6. `php artisan migrate --seed` (creates tables and seeds data)
7. `php artisan serve` (run the app)

- For SQLite: touch `database/db.sqlite3` and set `DB_CONNECTION=sqlite` in `.env`
- For MySQL/Postgres: update `.env` accordingly

---

## Usage

- Visit `/` for the customer UI
- Visit `/admin` for the admin dashboard
- Use `/api` endpoints for REST API
- GraphQL endpoint: `/graphql` (if enabled)

---

## Extensibility & Notes

- Easily add new pizza attributes, categories, or user roles
- Blade templates can be customized for branding
- GraphQL layer allows for flexible frontend/mobile clients
- API tokens enable mobile app or SPA integration

---

## License

MIT. See LICENSE file.
