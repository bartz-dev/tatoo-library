#####################################
# Nginx Base
#####################################
FROM nginx:1.21-alpine AS nginx

COPY ./docker/nginx/docker-entrypoint.sh /docker-entrypoint.sh
RUN chmod +x /docker-entrypoint.sh

COPY ./docker/nginx/nginx.conf /etc/nginx/
COPY ./docker/nginx/sites /etc/nginx/sites-available

RUN apk update \
    && apk upgrade \
    && apk add --no-cache bash nodejs npm git \
    && rm /etc/nginx/conf.d/default.conf \
    && npm install -g yarn

WORKDIR /var/www

COPY yarn.lock package.json artisan ./
RUN yarn install && rm -rf /usr/local/share/.cache/yarn

ENTRYPOINT ["/docker-entrypoint.sh"]
CMD ["nginx", "-g", "daemon off;"]

#####################################
# Nginx Prod
#####################################
FROM nginx AS nginx-prod

COPY webpack.mix.js ./
COPY tailwind.config.js ./
COPY ./resources ./resources
COPY ./public ./public

RUN yarn run prod && rm -rf ./node_modules \
    yarn.lock \
    package.json \
    webpack.mix.js \
    /usr/lib/node_modules

#####################################
# PHP Base
#####################################
FROM php:8.1-fpm as php

ARG GITHUB_OAUTH_TOKEN
ENV COMPOSER_MEMORY_LIMIT=-1
ARG APP_VERSION="latest"

WORKDIR /var/www

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer
RUN composer config --global repo.packagist composer https://packagist.org

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data
RUN chown www-data:www-data /var/www

# NodeJS is installed to generate API documentation during build because it needs node module + composer vendors.
RUN apt-get update && apt-get install -y --no-install-recommends \
    git \
    libicu-dev \
    libpq-dev \
    libzip-dev \
    openssh-client \
    unzip \
    zip \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl bcmath pdo pdo_mysql zip

COPY ./docker/php-fpm/laravel.ini /usr/local/etc/php/conf.d/
COPY ./docker/php-fpm/laravel.pool.conf /usr/local/etc/php-fpm.d/

COPY --chown=www-data:www-data ./docker/php-fpm/entrypoint.sh /
COPY --chown=www-data:www-data ./docker/wait_for_it.sh /wait_for_it.sh
RUN chmod +x /entrypoint.sh && chmod +x /wait_for_it.sh

USER www-data

USER root

ENTRYPOINT ["/entrypoint.sh"]

#####################################
# PHP Prod
#####################################
FROM php as php-prod

RUN /bin/bash -c 'mkdir -p /var/www/storage/{app,logs,framework/{cache,sessions,testing,views}} && chown -R www-data:www-data /var/www/storage'

USER www-data

COPY --chown=www-data:www-data ./composer.json ./composer.json
COPY --chown=www-data:www-data ./composer.lock ./composer.lock
COPY --chown=www-data:www-data ./artisan ./artisan
COPY --chown=www-data:www-data ./bootstrap ./bootstrap
COPY --chown=www-data:www-data ./config ./config
COPY --chown=www-data:www-data ./database ./database
COPY --chown=www-data:www-data ./resources ./resources
COPY --chown=www-data:www-data ./public/index.php ./public/index.php
COPY --chown=www-data:www-data ./routes ./routes
COPY --chown=www-data:www-data --from=nginx-prod /var/www/public/mix-manifest.json ./public/mix-manifest.json
COPY --chown=www-data:www-data ./.env.example ./.env
COPY --chown=www-data:www-data ./app ./app

RUN composer install --no-dev --no-scripts && rm -rf .composer

RUN echo ${APP_VERSION} > VERSION

#####################################
# PHP-DEV
#####################################
FROM php AS php-dev

ARG UID=1000
ARG GID=1000
ARG XDEBUG_CLIENT_HOST="host.docker.internal"
ARG XDEBUG_CLIENT_PORT="9000"
ARG XDEBUG_IDE_KEY="PHPSTORM"

USER root

RUN usermod -u ${UID} www-data
RUN groupmod -g ${GID} www-data

RUN pecl install xdebug && docker-php-ext-enable xdebug

RUN echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_host=${XDEBUG_CLIENT_HOST}" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port=${XDEBUG_CLIENT_PORT}" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.idekey=${XDEBUG_IDE_KEY}" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request=trigger" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.discover_client_host=false" >> /usr/local/etc/php/conf.d/xdebug.ini

USER www-data

#####################################
# PHP-TEST
#####################################
FROM php-prod AS php-test

USER root

COPY --chown=www-data:www-data ./phpunit.xml /var/www/phpunit.xml
COPY --chown=www-data:www-data ./.env.test /var/www/.env
COPY --chown=www-data:www-data ./tests /var/www/tests

RUN composer install --no-scripts && rm -rf .composer

USER www-data
