# PHP API Project

This project is a simple RESTful API built with PHP. It provides endpoints to retrieve data about users and products from a MySQL database.

## Project Structure

- **index.php**: The main entry point that routes API requests to the appropriate endpoint.
- **config.php**: Configuration file for database connection settings.
- **endpoints/**: Directory containing endpoint scripts for handling different API requests.
  - **users.php**: Endpoint for retrieving user data.
  - **products.php**: Endpoint for retrieving product data.

## How to Use

1. **Clone the repository and navigate to the `api` directory.**
2. **Configure your database settings in `config.php`.**
3. **Set up the required database tables (users and products).**
4. **Access the API endpoints:**
   - Users: `http://yourdomain.com/api/users`
   - Products: `http://yourdomain.com/api/products`

## Example Endpoints

- **Get Users**: `GET /api/users`
- **Get Products**: `GET /api/products`

## Requirements

- PHP 7.0 or higher
- MySQL
- Web server (e.g., Apache or Nginx)

## License

This project is licensed under the MIT License.
