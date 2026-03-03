# 1. Базовый образ с PHP и Composer
FROM composer:2 as vendor

WORKDIR /app
COPY database/ database/
COPY composer.json composer.lock ./

# Установка зависимостей (только для production)
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader

# 2. Образ для фронтенда
FROM node:18 as frontend

WORKDIR /app
COPY package.json package-lock.json* ./
RUN npm install

COPY --from=vendor /app/vendor/ /app/vendor/
COPY . .
RUN npm run build

# 3. Финальный образ для production
FROM richarvey/nginx-php-fpm:3.0.0

WORKDIR /var/www/html

# Копируем скомпилированные ассеты и зависимости
COPY --from=vendor /app/vendor/ /var/www/html/vendor/
COPY --from=frontend /app/public/ /var/www/html/public/
COPY --from=frontend /app/storage/ /var/www/html/storage/
COPY --from=frontend /app/resources/ /var/www/html/resources/
COPY --from=frontend /app/database/ /var/www/html/database/
COPY --from=frontend /app/config/ /var/www/html/config/
COPY --from=frontend /app/routes/ /var/www/html/routes/
COPY --from=frontend /app/artisan /var/www/html/artisan
COPY --from=frontend /app/.env.example /var/www/html/.env

# Настраиваем права доступа
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# Команда запуска (используется Render)
# ВАЖНО: Render выполнит миграции отдельно с помощью buildCommand
CMD ["php-fpm"]
