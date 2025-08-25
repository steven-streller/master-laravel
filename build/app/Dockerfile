# === Stage 1: Node.js - Asset Build ===
FROM node:24.6.0-alpine3.22@sha256:51dbfc749ec3018c7d4bf8b9ee65299ff9a908e38918ce163b0acfcd5dd931d9 AS nodebuild
WORKDIR /app

# Nur package files für besseren Cache
COPY package.json package-lock.json ./
RUN npm install

# Restlicher Code & Build
COPY vite.config.js ./
COPY resources ./resources

RUN npm run build

# === Stage 2: Composer - PHP Dependencies ===
FROM composer:2.8.11@sha256:d013f2c06509ff0a06342f67a7fc062deebda2c36e17b415b035f1299dcd181e AS composer
WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --no-scripts --optimize-autoloader

# === Stage 3: PHP mit FPM-Alpine ===
FROM php:8.4-fpm-alpine3.22@sha256:5f54968e4f26b46e8d6f4b1f3b65b115b3279bd60c7371169e413ba6a439e5f8

# PHP-Erweiterungen für Laravel
RUN docker-php-ext-install pdo pdo_mysql

# FPM Pool-Konfiguration kopieren
COPY ./build/app/www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www/html

RUN chown root:root /var/www/html && chmod 755 /var/www/html

RUN mkdir -p  storage/framework/cache \
              storage/framework/sessions \
              storage/framework/views \
          &&  chown -R www-data:www-data storage

# Artefakte aus den vorherigen Stages
COPY public/index.php public/index.php
COPY --from=composer /app/vendor ./vendor
COPY --from=composer /app/composer.json /app/composer.lock ./
COPY --from=nodebuild /app/package-lock.json /app/package.json ./
COPY --from=nodebuild /app/public/build/manifest.json ./public/build/manifest.json

COPY --chmod=644 artisan artisan
COPY app/ app/
COPY --chown=www-data:www-data bootstrap/ bootstrap/
COPY config/ config/
COPY database/ database/
COPY routes/ routes/
COPY resources/ resources/

USER www-data

EXPOSE 9000