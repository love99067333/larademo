FROM richarvey/nginx-php-fpm:2.1.1
FROM php:8.0-fpm
 

COPY . .

# Image config
ENV SKIP_COMPOSER 1
ENV WEBROOT /var/www/html/public
ENV PHP_ERRORS_STDERR 1
ENV RUN_SCRIPTS 1
ENV REAL_IP_HEADER 1

# Laravel config
ENV APP_ENV production
ENV APP_DEBUG false
ENV LOG_CHANNEL stderr

# Allow composer to run as root
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt-get update && apt-get install -y \
        # For php gd ext
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        # For php zip ext
        zlib1g-dev \
        libzip-dev \
        # For memcached
        libmemcached-dev \
        # Install required packages
        default-mysql-client \
        locales \
        # For php composer
        unzip \
        # For Terminal
        git \
        subversion \
        vim \
    && docker-php-ext-configure sockets \
    && docker-php-ext-install -j$(nproc) sockets \
CMD ["/start.sh"]