#!/usr/bin/env bash
# Exit on error
set -o errexit

# Install frontend dependencies
echo "Installing NPM dependencies..."
npm install

# Build frontend assets for production
echo "Building frontend assets..."
npm run build

# Run database migrations
echo "Running database migrations..."
php artisan migrate --force

echo "Build complete!"
