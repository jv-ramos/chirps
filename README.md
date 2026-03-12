# **Chirper**

<div align="left">
  <img src="https://img.shields.io/badge/Status-Work In Progress-orange" alt="Status">
  <img src="https://img.shields.io/badge/PHP-8.2-blue" alt="PHP">
  <img src="https://img.shields.io/badge/Laravel-12.0-red" alt="Laravel">
  <img src="https://img.shields.io/badge/Pest-4.4-yellow" alt="Pest">
</div>

</br>

Chirper is a Twitter-like microblogging application built with Laravel, following the official Getting Started guide available on the [Laravel](https://laravel.com/learn/getting-started-with-laravel/what-are-we-building) website.

## **Requirements**

- [`PHP 8.2`](#installing)
- [`Composer 2.9.5`](#installing)
- [`Laravel 12.02`](#installing)

### About

This project was built to practice core Laravel concepts hands-on. By following along, you'll get practical experience with:

- MVC Architecture — understanding the separation between Models, Views and Controllers in a PHP application
- Blade Templating — using Laravel's built-in front-end template engine to create dynamic views
- Routing — exploring multiple approaches to define and organize application routes
- Migrations — creating and running database migrations to version-control your schema
- Eloquent ORM — interacting with the database using Laravel's expressive model layer
- Policies & Authorization — controlling what actions each user is allowed to perform
- Components & Layouts — structuring reusable UI pieces with Blade components
- Form Handling & Validation — processing user input safely with Laravel's validation rules
- Authentication — leveraging Laravel Breeze for user registration and login out of the box
- Deployment — exploring options to take a Laravel application to production

## Installing

Here you can see how to [install PHP and Laravel](https://laravel.com/docs/12.x#installing-php).

Check `PHP` version:

```sh
php -v
```

Check `Laravel` version:

```sh
laravel -v
```

### **Clone the repository**

```sh
# Cloning the repository
git clone https://github.com/jv-ramos/chirper.git

# Navigate to the directory
cd chirper

# Install the laravel dependencies
composer install

# Install the node dependencies
npm install

# Migrate the database
php artisan migrate
```

### Run the and access the app

```sh
# You can run both Vite and Laravel development servers with this command

composer run dev

# Access the app at http://localhost:8000
```
