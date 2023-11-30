FROM php:8.1-fpm

RUN apt-get update && \
    apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libonig-dev \
        libzip-dev \
        libwebp-dev \
        zip \
        unzip \
        vim \
        git \
        nginx \
        supervisor \
        nodejs  \
        npm

# configure PHP GD extension to run freetype + jpeg + webp
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp

RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath zip gd

RUN apt clean && rm -rf /var/lib/apr/lists/*

# copy nginx config
COPY ../docker/nginx/maduostudio.conf /etc/nginx/sites-available/maduostudio.conf
RUN ln -s /etc/nginx/sites-available/maduostudio.conf /etc/nginx/sites-enabled/

# copy supervisord configuration
COPY ../docker/supervisor/supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# copy the application code
COPY ../source /var/www/maduostudio

# set the working directory
WORKDIR /var/www/maduostudio

RUN chown -R www-data:www-data /var/www/maduostudio

# Install js dependencies
RUN npm install

# Build project js & frontend
RUN npm run build

EXPOSE 9000
EXPOSE 8080

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
