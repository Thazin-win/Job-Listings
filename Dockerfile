FROM php:8.2-cli
RUN apt-get update && apt-get install -y curl git unzip libzip-dev libpq-dev
RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader
RUN chmod -R 775 storage bootstrap/cache
CMD php artisan serve --host=0.0.0.0 --port=$PORT