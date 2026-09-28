#!/bin/sh

# Run our artisan commands
php artisan route:clear
php artisan config:clear
php artisan view:clear
# php artisan filament:optimize // Uncomment if using Filament

# Clear version cache
php artisan app:clear-version-cache

# Migrate the database
php artisan migrate --force

echo "Starting Octane with FrankenPHP..."
php artisan octane:frankenphp
