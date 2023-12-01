#
# Build stage-1: Composer
#
FROM composer:2.4.3 AS composer

WORKDIR /app

COPY source .

RUN composer install \
    --no-dev \
    --no-interaction \
    --no-scripts \
    --prefer-dist

RUN composer dump-autoload -o

#
# Build stage-2: Composer
#docker
FROM node:21-alpine AS node

WORKDIR /app

# Copy package.json, package-lock.json, and vite.config.js
COPY source/package.json source/package-lock.json source/vite.config.js ./

# Copy JS and SCSS files
COPY source/resources/js/ ./resources/js/
COPY source/resources/sass/ ./resources/sass/

RUN npm install
RUN npm run build

#
# Build stage-3: Main app
#
FROM php:8.1-fpm-alpine

ARG env_decryption_key

RUN apk update && \
    apk add --no-cache \
        freetype-dev \
        jpeg-dev \
        libpng-dev \
        oniguruma-dev \
        libzip-dev \
        libwebp-dev \
        libpq-dev \
        zip \
        unzip \
        vim \
        nginx \
        supervisor


# configure pgsql and PHP GD extension to run freetype + jpeg + webp
RUN docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp

RUN docker-php-ext-install pdo pgsql pdo_pgsql mbstring exif pcntl bcmath zip gd


# clear apk cache
RUN rm -rf /var/cache/apk/*

# copy nginx config
COPY docker/nginx/maduostudio.conf /etc/nginx/http.d/maduostudio.conf

# copy supervisord configuration
COPY docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# copy the application code
COPY source/ /var/www/maduostudio

# set the working directory
WORKDIR /var/www/maduostudio

RUN chown -R www-data:www-data /var/www/maduostudio

# copy vendor
COPY --from=composer /app/vendor/ /var/www/maduostudio/vendor/

# copy frontend build
COPY --from=node /app/public/build/ /var/www/maduostudio/public/build/

RUN php artisan package:discover

# decrypt .env.prod file
RUN php artisan env:decrypt --env=prod --key="$env_decryption_key"

# rename .env.prod to .env
RUN mv .env.prod .env

# delete encrypted .env.prod file since no need for it anymore
RUN rm .env.prod.encrypted

EXPOSE 9000
EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
