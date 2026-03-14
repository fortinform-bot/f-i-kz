#!/usr/bin/env bash
# Exit on error
set -o errexit

# Install Composer Dependencies
composer install --no-interaction --prefer-dist --optimize-autoloader

# Install NPM Dependencies
npm install

# Build Assets
npm run build

echo "Build script finished successfully!"
