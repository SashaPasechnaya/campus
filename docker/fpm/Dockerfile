FROM php:8.1-fpm-buster
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN pecl install xdebug
COPY xdebug.ini /usr/local/etc/php/conf.d/
WORKDIR /www
