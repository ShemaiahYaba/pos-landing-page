# ---- Build frontend assets ----
FROM node:20-alpine AS nodebuild
WORKDIR /app
COPY package*.json ./
RUN npm ci
COPY . .
RUN npm run build

# ---- PHP dependencies ----
FROM composer:2 AS composerbuild
WORKDIR /app
COPY composer.json composer.lock ./
RUN composer install --no-dev --prefer-dist --no-interaction --no-scripts
COPY . .
RUN composer dump-autoload --optimize

# ---- Runtime ----
FROM php:8.4-fpm-alpine

# System deps
RUN apk add --no-cache nginx supervisor bash \
    icu-dev oniguruma-dev libzip-dev zip unzip \
    && docker-php-ext-install intl mbstring pdo pdo_mysql zip opcache

WORKDIR /var/www/html

# Copy app
COPY --from=composerbuild /app /var/www/html
COPY --from=nodebuild /app/public/build /var/www/html/public/build

# Nginx config
COPY docker/nginx.conf /etc/nginx/nginx.conf

# Supervisor config (runs nginx + php-fpm)
COPY docker/supervisord.conf /etc/supervisord.conf

# Permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 10000
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
