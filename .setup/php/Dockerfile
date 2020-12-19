FROM php:7.4-fpm-alpine

RUN apk update; \
    apk upgrade;

RUN docker-php-ext-install mysqli pdo pdo_mysql bcmath
#\
#    && apk add --no-cache freetype libpng freetype-dev libpng-dev \
#    && docker-php-ext-install gd \
#    && apk add --no-cache zip libzip-dev \
#    && docker-php-ext-configure zip \
#    && docker-php-ext-install zip \
#    && apk add --update icu-dev \
#	&& docker-php-ext-install intl\
#    && set -ex && apk --no-cache add libxml2-dev \
 #   && docker-php-ext-install soap \
#    && docker-php-ext-install xmlrpc \
#    && docker-php-ext-install opcache

# For easy navigating add oh my zsh and it's deps
RUN apk -q add curl \
    nano \
    git;


# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /var/www/
