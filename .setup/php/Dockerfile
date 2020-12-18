FROM php:7.4-fpm-alpine

RUN apk update; \
    apk upgrade;

# Add Necessary PHP Extensions
# https://github.com/docker-library/php/issues/279\

RUN docker-php-ext-install mysqli \
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
    && docker-php-ext-install opcache

# For easy navigating add oh my zsh and it's deps
RUN apk -q add curl \
    zsh \
    nano \
    git; \
    sh -c "$(curl -fsSL https://raw.githubusercontent.com/robbyrussell/oh-my-zsh/master/tools/install.sh)"; \
    sed -i s^ZSH_THEME=\"robbyrussell\"^ZSH_THEME=\"blinks\"^g ~/.zshrc;

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer