# MrHoang RealEstate Project - QWEN Context

## Project Overview

This is a Laravel-based real estate management application built for MrHoang RealEstate. It uses the Laravel 12 framework with FilamentPHP as the admin panel solution. The application provides functionality for managing properties, blog posts, and user interactions for a real estate website.

### Key Technologies & Features
- **Laravel 12**: Modern PHP framework for web applications
- **FilamentPHP 4.x**: Powerful admin panel with built-in CRUD operations
- **Spatie Packages**: Media library, permission management, slugging
- **Tailwind CSS 4**: Modern CSS framework for styling
- **Vite**: Build tool for assets compilation
- **PHP 8.2+**: Minimum required PHP version

### Architecture
- **Backend**: Laravel PHP framework
- **Admin Panel**: FilamentPHP 4.x
- **Database**: Laravel migrations and Eloquent ORM
- **Frontend**: Blade templates with Tailwind CSS
- **Assets**: Managed via Vite and Laravel Mix

## Project Structure

```
MrHoang_RealEstate_Andy_2025/
├── app/                    # Application source code
│   ├── Filament/          # Filament admin configurations
│   ├── Http/              # Controllers, middleware, requests
│   ├── Models/            # Eloquent models
│   ├── Providers/         # Service providers
│   └── Settings/          # Application settings
├── bootstrap/             # Framework bootstrap files
├── config/                # Laravel configuration files
├── database/              # Migrations, seeders, factories
├── docs/                  # Documentation
├── public/                # Public assets and entry point
├── resources/             # Views, CSS, JS, and other resources
├── routes/                # Application routes
├── storage/               # Compiled views, file uploads, etc.
└── tests/                 # Test files
```

### Key Directories and Files

- **app/Models/**: Contains Eloquent models (Property, User, Post, etc.)
- **app/Http/Controllers/**: Controllers for handling requests
- **routes/web.php**: Defines web routes for the application
- **resources/views/**: Blade templates for the frontend
- **config/**: Laravel configuration files
- **database/migrations/**: Database schema migrations
- **database/seeders/**: Data seeding files
- **database/factories/**: Model factory definitions

## Models

Key data models include:
- **Property**: Main real estate property model with features like price, type, bedrooms, bathrooms, etc.
- **User**: Authentication model with role-based permissions
- **Post**: Blog post model for content management
- **Contact**: Contact form submissions
- **Amenity**: Property amenities
- **Role**: User role management

## Building and Running

### Initial Setup

1. **Prepare Environment**: Copy `.env.example` to `.env`
2. **Install PHP Dependencies**:
   ```bash
   composer install
   ```
3. **Run Migrations and Seed Data**:
   ```bash
   php artisan migrate:fresh --seed
   ```
4. **Generate Application Key** (if not done automatically):
   ```bash
   php artisan key:generate
   ```

### Development Commands

- **Run the Local Server**:
  ```bash
  php artisan serve
  ```
  The application will be available at http://127.0.0.1:8000

- **Start Development Environment** (with concurrent processes):
  ```bash
  composer run dev
  ```
  This starts the Laravel server, queue listener, Pail logs, and Vite in parallel.

- **Build Assets for Production**:
  ```bash
  npm run build
  ```

- **Run Development Assets**:
  ```bash
  npm run dev
  ```

- **Run Tests**:
  ```bash
  composer run test
  ```

- **Install Filament Admin Panel**:
  ```bash
  php artisan filament:install --panels
  ```

### Frontend Assets

- **CSS**: Tailwind CSS 4
- **Build Tool**: Vite
- **Configuration**: vite.config.js
- **Entry Points**: resources/css/app.css and resources/js/app.js

## Routes & Views

The application includes the following main routes:

| URL | View | Purpose |
| --- | --- | --- |
| / | pages.home | Homepage |
| /about | pages.about | About page |
| /properties | pages.properties | Properties listing |
| /properties/{slug} | property-detail | Property detail page |
| /blog | pages.blog | Blog listing |
| /blog/{slug} | blog-detail | Blog post detail |
| /contact | pages.contact | Contact page |

## Admin Panel (Filament)

The application includes a FilamentPHP admin panel for:
- Property management
- Blog post management
- User management
- Role and permission management
- Media library for property images

To access the admin panel, navigate to `/admin` (default location).

## Development Conventions

### Coding Standards
- Follow Laravel best practices and conventions
- PSR-12 coding standard (checked with Laravel Pint)
- Model-View-Controller (MVC) architecture pattern
- Repository pattern where appropriate

### Database & Models
- Uses Laravel Eloquent ORM
- Follows Laravel naming conventions
- Soft deletes are implemented where appropriate
- Sluggable models for SEO-friendly URLs
- Media library for file uploads

### Frontend
- Blade templating system
- Tailwind CSS for styling
- Responsive design approach
- Asset compilation via Vite

### Testing
- PHPUnit for backend testing
- PestPHP as testing framework
- Model factories for test data
- Feature and unit tests available

### Security
- Built-in Laravel authentication
- Role-based permissions with spatie/laravel-permission
- Password hashing by default
- CSRF protection

## Key Packages Used

- `filament/filament`: Admin panel solution
- `filament/spatie-laravel-media-library-plugin`: Media management for Filament
- `spatie/laravel-medialibrary`: Advanced file media handling
- `spatie/laravel-permission`: User role and permission management
- `spatie/laravel-sluggable`: Automatic slug generation
- `spatie/laravel-settings`: Application settings management
- `barryvdh/laravel-debugbar`: Debugging utilities
- `laravel/pint`: PHP code linter and formatter

## Environment Configuration

- Copy `.env.example` to `.env` for local development
- Configure database connection in `.env` file
- Set up mail configuration if needed for contact forms
- Configure cache and session settings as required

## Common Maintenance Tasks

### Clearing Caches
```bash
php artisan config:clear
php artisan cache:clear
php artisan view:clear
php artisan route:clear
```

### Running Migrations
```bash
php artisan migrate
php artisan migrate:rollback  # To undo migrations
php artisan migrate:fresh --seed  # To reset and re-seed
```

### Generating Filament Resources
```bash
php artisan make:filament-resource PropertyResource
```

### Creating New Models
```bash
php artisan make:model Property -mcr  # Creates model, migration, and controller
```