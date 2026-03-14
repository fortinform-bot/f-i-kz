#!/usr/bin/env bash
# Exit on error
set -o errexit

# Install Composer Dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install NPM Dependencies
npm install

# Build Assets
npm run build

# Clear and Cache Configuration
# These commands are run during the build process to optimize the application.
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "Build script finished successfully!"
