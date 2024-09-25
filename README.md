# Admin-Client Basic Template Website

This project is a basic template for a Laravel web application with separate admin and client areas, using Breeze for authentication, Blade for templating, and Alpine.js for dynamic components. The project is structured to include distinct layouts for admin and client views.

## Features

- **Laravel Breeze**: Provides basic authentication scaffolding.
- **Blade Templating**: Clean and organized Blade views.
- **Alpine.js**: Adds dynamic interactivity with minimal JavaScript.
- **Separated Admin and Client Layouts**: Admin and client have their own views and layouts.
- **Livewire Compatible**: Can easily integrate Livewire components.

## Installation

Follow these steps to set up the project:

### Prerequisites
- PHP >= 8.0
- Composer
- Laravel 9+
- MySQL or any other database supported by Laravel

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/your_username/your_project.git```
2.	Navigate into the project directory:
   ```cd your_project```
3. 	Rename .env.example to .env:
   Change ```.env.example```to ```.env```
4. Install the required dependencies:
   ```composer install```
5.	Generate the application key:
    ```php artisan key:generate```
6. Start the application
   ```php artisan serve```

