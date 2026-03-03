# Используем официальный образ PHP 8.2
FROM php:8.2-cli

# Устанавливаем ключевые системные зависимости и добавляем репозиторий Node.js 20
RUN apt-get update && apt-get install -y \
    libpq-dev \
    zip \
    unzip \
    git \
    curl \
    gnupg \
    && mkdir -p /etc/apt/keyrings \
    && curl -fsSL https://deb.nodesource.com/gpgkey/nodesource-repo.gpg.key | gpg --dearmor -o /etc/apt/keyrings/nodesource.gpg \
    && echo "deb [signed-by=/etc/apt/keyrings/nodesource.gpg] https://deb.nodesource.com/node_20.x nodistro main" | tee /etc/apt/sources.list.d/nodesource.list \
    && apt-get update \
    && apt-get install -y nodejs

# Устанавливаем PHP-расширения
RUN docker-php-ext-install pdo pdo_pgsql bcmath

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Устанавливаем рабочую директорию
WORKDIR /app

# Копируем все файлы приложения
COPY . .

# Устанавливаем зависимости и собираем проект
RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader
RUN npm install
RUN npm run build

# Настраиваем права доступа
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache
RUN chmod -R 775 /app/storage /app/bootstrap/cache

# Копируем и открываем порт для скрипта запуска
EXPOSE 10000
COPY run.sh /usr/local/bin/run.sh

# Команда для запуска
CMD ["run.sh"]
