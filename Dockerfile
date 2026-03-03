# Используем официальный образ PHP 8.2
FROM php:8.2-cli

# Устанавливаем системные зависимости
RUN apt-get update && apt-get install -y \
    libpq-dev \
    nodejs \
    npm \
    zip \
    unzip \
    git

# Устанавливаем необходимые PHP-расширения
RUN docker-php-ext-install pdo pdo_pgsql bcmath

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем все файлы приложения
COPY . .

# Устанавливаем зависимости PHP и JS
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
RUN npm install
RUN npm run build

# Настраиваем права доступа для Laravel
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Открываем порт и копируем скрипт запуска
EXPOSE 10000
COPY run.sh /usr/local/bin/run.sh

# Команда для запуска (скрипт + веб-сервер)
CMD ["run.sh"]
