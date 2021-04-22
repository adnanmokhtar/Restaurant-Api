FROM php:7.1.3-fpm
RUN apt-get update && \
    apt-get install -y --no-install-recommends \
        git \
        libmemcached-dev \
        libz-dev \
        libpq-dev \
        libjpeg-dev \
        libfreetype6-dev \
        libssl-dev \
        libmcrypt-dev

RUN docker-php-ext-install mcrypt
RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY . /app
RUN composer install

CMD php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
