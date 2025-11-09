# Project Overview

This is a real estate web application built with the Laravel framework. It features a public-facing website for browsing properties and a comprehensive admin panel for managing the site's content.

## Key Technologies

*   **Backend:** PHP 8.2, Laravel 12
*   **Frontend:** Vite, Tailwind CSS, JavaScript
*   **Admin Panel:** Filament 4
*   **Database:** Not specified, but likely MySQL or PostgreSQL (based on typical Laravel setups).
*   **Key Packages:**
    *   `filament/filament`: For the admin panel.
    *   `spatie/laravel-medialibrary`: For managing media files.
    *   `spatie/laravel-sluggable`: For generating slugs from model attributes.
    *   `spatie/laravel-settings`: For managing application settings.

## Architecture

The application follows a standard Laravel MVC (Model-View-Controller) architecture.

*   **Models:** Located in `app/Models`, they define the data structure and relationships. Key models include `Property`, `Post`, `Amenity`, and `User`.
*   **Views:** Located in `resources/views`, they are written in Blade and rendered by the controllers.
*   **Controllers:** Located in `app/Http/Controllers`, they handle user requests and interact with the models and views.
*   **Routes:** Defined in `routes/web.php`, they map URLs to controller actions.
*   **Admin Panel:** The Filament admin panel is configured in `app/Providers/Filament/AdminPanelProvider.php` and is accessible at `/admin`. Resources for the admin panel are located in `app/Filament/Resources`.

# Building and Running

1.  **Install Dependencies:**
    ```bash
    composer install
    npm install
    ```

2.  **Set up Environment:**
    *   Copy the `.env.example` file to `.env`:
      ```bash
      cp .env.example .env
      ```
    *   Generate an application key:
      ```bash
      php artisan key:generate
      ```
    *   Configure your database and other environment variables in the `.env` file.

3.  **Run Migrations and Seed Data:**
    ```bash
    php artisan migrate:fresh --seed
    ```

4.  **Run the Development Servers:**
    *   This command will start the PHP server, Vite development server, queue listener, and log viewer concurrently:
      ```bash
      composer run dev
      ```
    *   Alternatively, you can run them separately:
      ```bash
      # In one terminal, run the PHP server
      php artisan serve

      # In another terminal, run the Vite development server
      npm run dev
      ```

5.  **Access the Application:**
    *   **Website:** [http://127.0.0.1:8000](http://127.0.0.1:8000)
    *   **Admin Panel:** [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)

# Development Conventions

## Testing

*   The project uses Pest for testing.
*   Run the test suite with the following command:
    ```bash
    composer run test
    ```

## Code Style

*   The project uses Laravel Pint for code styling. To format your code, you can run:
    ```bash
    ./vendor/bin/pint
    ```
