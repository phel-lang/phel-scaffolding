FROM php:7.4-fpm

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN curl https://getcomposer.org/composer-stable.phar > /usr/local/bin/composer
RUN chmod 755 /usr/local/bin/composer
RUN useradd -m dev
WORKDIR /srv/phel-scaffolding
