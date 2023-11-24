FROM php:8.1.0-fpm

WORKDIR /usr/local/www/data/test-app

RUN apt-get update && apt-get install -y \
        git \
        curl \
        procps \
        psmisc \
        sudo \
        nano \
        rsync \
        iproute2 \
        iputils-ping \
        dnsutils \
        zip \
        unzip \
        zlib1g-dev \
        libzip-dev

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=2.2.11

RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# Xdebug
ARG INSTALL_XDEBUG=false
RUN if [ ${INSTALL_XDEBUG} = true ]; \
    then \
      pecl install xdebug && docker-php-ext-enable xdebug; \
    fi;

COPY ./php-fpm/xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini

USER www
