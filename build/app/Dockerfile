# === Stage 1: Node.js - Asset Build ===
FROM node:24.7.0-alpine3.22@sha256:be4d5e92ac68483ec71440bf5934865b4b7fcb93588f17a24d411d15f0204e4f AS nodebuild
WORKDIR /app

# Nur package files für besseren Cache
COPY package.json package-lock.json ./
RUN npm install

# Restlicher Code & Build
COPY vite.config.js ./
COPY resources ./resources

RUN npm run build

# === Stage 2: Composer - PHP Dependencies ===
FROM composer:2.8.11@sha256:68e926a477000f12e8645e82a020b84904d49071c895c4951551fe80eed5d103 AS composer
WORKDIR /app

COPY composer.json composer.lock ./

RUN composer install --no-dev --no-scripts --optimize-autoloader

# === Stage 3: PHP mit FPM-Alpine ===
FROM php:8.4-fpm-alpine3.22@sha256:999f910cc872e4930d2d5c4b91d80ed712e8cf77ba173c729127bfdc5fddfb88

# PHP-Erweiterungen für Laravel
RUN docker-php-ext-install pdo pdo_mysql

# Abhängigkeiten von apk add kommen aus $PHPIZE_DEPS
RUN apk add --no-cache --virtual .build-deps \
        autoconf=2.72-r1 dpkg-dev=1.22.15-r0 dpkg=1.22.15-r0 \
        file=5.46-r2 g++=14.2.0-r6 gcc=14.2.0-r6 musl-dev=1.2.5-r10 \
        make=4.4.1-r3 pkgconf=2.4.3-r0 re2c=4.2-r0 \
    && pecl install redis-6.2.0 \
    && docker-php-ext-enable redis \
    && apk del .build-deps

# FPM Pool-Konfiguration kopieren
COPY ./build/app/www.conf /usr/local/etc/php-fpm.d/www.conf

WORKDIR /var/www/html

RUN chown root:root /var/www/html && chmod 755 /var/www/html

RUN mkdir -p  storage/framework/cache \
              storage/framework/sessions \
              storage/framework/views \
              bootstrap/cache \
          &&  chown -R www-data:www-data storage bootstrap/cache

# Artefakte aus den vorherigen Stages
COPY public/index.php public/index.php
COPY --from=composer /app/vendor ./vendor
COPY --from=composer /app/composer.json /app/composer.lock ./
COPY --from=nodebuild /app/package-lock.json /app/package.json ./
COPY --from=nodebuild /app/public/build/manifest.json ./public/build/manifest.json

COPY --chmod=644 artisan artisan
COPY app/ app/
COPY --chown=www-data:www-data bootstrap/app.php bootstrap/providers.php bootstrap/
COPY config/ config/
COPY database/ database/
COPY routes/ routes/
COPY resources/ resources/

USER www-data

EXPOSE 9000
