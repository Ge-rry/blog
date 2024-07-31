# MyBlog

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/Ge-rry/blog/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About MyBlog

MyBlog is a simple CRUD application for managing blog posts, built with Laravel. This project was created as part of an assignment to demonstrate the ability to use Laravel to create, read, update, and delete blog posts.

## Features

- Create new blog posts
- View a list of all blog posts
- Edit existing blog posts
- Delete blog posts

## Prerequisites

Before you begin, ensure you have met the following requirements:
- PHP (>= 8.0)
- Composer
- Node.js & npm
- MySQL
- Git

## Installation

To install and set up the application, follow these steps:

1. Clone the repository:
    ```bash
    git clone https://github.com/Ge-rry/blog.git
    cd blog
    ```

2. Install the dependencies:
    ```bash
    composer install
    npm install
    ```

3. Create a copy of the `.env` file:
    ```bash
    cp .env.example .env
    ```

4. Generate an application key:
    ```bash
    php artisan key:generate
    ```

5. Set up your database:
    - Open the `.env` file and update the database settings:
      ```plaintext
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_database_username
      DB_PASSWORD=your_database_password
      ```

6. Run the migrations:
    ```bash
    php artisan migrate
    ```

7. Seed the database:
    ```bash
    php artisan db:seed --class=PostSeeder
    ```

8. Start the development server:
    ```bash
    php artisan serve
    ```

## Usage

1. Open your web browser and navigate to `http://localhost:8000/posts`.
2. You can now create, view, edit, and delete blog posts.

## Running Tests

To run the tests, use the following command:
```bash
php artisan test
