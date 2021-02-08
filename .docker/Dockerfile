FROM php:8.0-cli

WORKDIR "/application"

# install system packages
RUN apt-get update \
    && apt-get install -y libzip-dev git \
    && apt-get clean; rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# install php extensions
RUN docker-php-ext-install zip

# install xdebug to coverage
RUN pecl install xdebug
RUN echo 'zend_extension=/usr/local/lib/php/extensions/no-debug-non-zts-20200930/xdebug.so' | tee /usr/local/etc/php/conf.d/xdebug.ini

# install composer
COPY --from=composer:2 /usr/bin/composer /usr/local/bin/composer
