## Real Time Notifications

Real Time Notifications with laravel and websockets

## Technolgies and packages used

- **[laravel ui](https://github.com/laravel/ui)** for authintication
- **[laravel collective](https://github.com/LaravelCollective/html)** for form attributes
- **[laravel websocket](https://beyondco.de/docs/laravel-websockets/getting-started/installation)** for real time notifications
- **[laravel echo](https://github.com/laravel/echo)** for real time notifications


# Getting started

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/9.x/installation#installation)

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file (add PUSHER_HOST)

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

Start the websocket server

    php artisan websocket:serve
    npm run dev

You can now access the server at http://localhost:8000

----------
