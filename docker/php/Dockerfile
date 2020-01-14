FROM php:fpm

LABEL maintainer = 'Bayu Bimantara <bayubimantarar@gmail.com>'

RUN useradd bimantara && \
    apt update && \
    apt install -y curl zip unzip libzip-dev libpng-dev && \
    docker-php-ext-install pdo pdo_mysql zip gd && \
    pecl install mongodb && \
    echo 'extension=mongodb.so' > /usr/local/etc/php/conf.d/mongo.ini && \
    curl -s https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer
