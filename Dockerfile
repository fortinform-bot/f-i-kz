# Используем официальный образ PHP 8.2 с Composer и Node.js
FROM richarvey/nginx-php-fpm:3.0.0

# Устанавливаем рабочую директорию
WORKDIR /var/www/html

# Копируем файлы проекта
COPY . .

# Устанавливаем зависимости
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader && \
    npm install && \
    npm run build

# Выполняем миграции и генерируем ключ
RUN php artisan key:generate && \
    php artisan migrate --force

# Открываем порт и запускаем приложение
EXPOSE 10000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=10000"]
