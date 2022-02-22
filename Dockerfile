FROM php:7.4.1-fpm

# Composer install
COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

# install Node.js
COPY --from=node:16.14 /usr/local/bin /usr/local/bin
COPY --from=node:16.14 /usr/local/lib /usr/local/lib

RUN apt-get update && \
  apt-get -y install \
  git \
  zip \
  unzip \
  && docker-php-ext-install pdo_mysql bcmath

WORKDIR /laravel