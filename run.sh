#!/bin/sh
set -e

# Выполняем миграции базы данных
echo "Running database migrations..."
php artisan migrate --force

# Запускаем основной процесс (веб-сервер)
echo "Starting PHP Artisan server..."
exec php artisan serve --host=0.0.0.0 --port=10000
