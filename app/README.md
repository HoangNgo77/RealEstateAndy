# Install

Step 1: Prepare the .env file

Step 2: Install dependencies

```bash
composer install
```

Step 3: Migrate and seed

```bash
php artisan migrate:fresh --seed
```

Step 4: Run the server

```bash
php artisan serve
```

Terminal display message

```
  INFO  Server running on [http://127.0.0.1:8000].  

  Press Ctrl+C to stop the server
```

Open http://127.0.0.1:8000 in your browser to view

# URL & View blade

| URL | View |
| --- | --- |
| / | pages.home |
| /about | pages.about |
| /properties | pages.properties |
| /property-detail | pages.property-detail |
| /blog | pages.blog |
| /blog-detail | pages.blog-detail |
| /contact | pages.contact |

# Packages

| Package | Usage |
| --- | --- |
| filament/filament | Admin panel |
| filament/spatie-laravel-media-library-plugin | Media library for Eloquent models |
| spatie/laravel-sluggable | Sluggable for Eloquent models |
| spatie/laravel-medialibrary | Media library for Eloquent models |
| spatie/laravel-settings | Settings for Eloquent models |
