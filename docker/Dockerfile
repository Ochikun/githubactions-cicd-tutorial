FROM php:8.2-fpm

COPY php.ini /usr/local/etc/php/conf.d
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN apt-get update && apt-get install -y \
    git curl zip unzip

WORKDIR /var/www/html
