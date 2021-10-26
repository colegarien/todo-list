FROM php:fpm
COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN apt-get update -y
RUN apt-get -y install git curl unzip