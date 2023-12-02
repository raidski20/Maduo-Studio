FROM php:8.2-fpm

ARG user
ARG uid

# create new user and add it to root and attach his home directory
RUN useradd \
    -m \
    -G root \
    -u $uid \
    -d /home/$user \
    $user

# install dependencies
RUN apt update && \
    apt install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        libwebp-dev \
        zip \
        unzip \
        vim \
        nodejs  \
        npm

# configure PHP GD extension to run freetype + jpeg + webp
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp

# install extensions
RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath zip gd

# clean apt cache
RUN apt-get clean && rm -rf /var/lib/apr/lists/*

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

VOLUME /app

USER $user

EXPOSE 9000
