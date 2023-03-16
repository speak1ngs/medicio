FROM php:8.2-cli

RUN curl -sSL https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions -o - | sh -s \
    gd xdebug

RUN docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-enable pdo_mysql