#!/bin/sh
set -e

# Laravel: Очищаем старый кеш
echo "Clearing caches..."
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Laravel: Создаем кеш для продакшена
echo "Caching configuration for production..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Выполняем миграции базы данных
echo "Running database migrations..."
php artisan migrate --force

# Запускаем основной процесс (веб-сервер)
echo "Starting PHP Artisan server..."
exec php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
