FROM php:7.1-apache
RUN apt-get update \
  && apt-get install -y libpng-dev zlib1g-dev libicu-dev libfreetype6-dev libjpeg62-turbo-dev g++ \
  && apt-get clean \
  && a2enmod rewrite \
  && docker-php-ext-configure intl \
  && docker-php-ext-install mysqli pdo_mysql intl \
  && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
  && docker-php-ext-install -j$(nproc) gd
COPY env/php.ini /usr/local/etc/php

# install zip, required for composers
RUN apt-get update
RUN apt-get install zip unzip

# install composer
RUN curl -s --show-error http://getcomposer.org/installer | php
RUN mv ./composer.phar /usr/local/bin/composer

# set new created file to have full access permissions
RUN echo "umask 000" >> /etc/apache2/envvars
