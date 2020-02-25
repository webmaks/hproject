FROM php:7.4.3-fpm-alpine3.11

RUN docker-php-ext-install mysqli pdo pdo_mysql
RUN mkdir /code

COPY ../code/index.php /code/

WORKDIR /code

CMD [ "php-fpm" ]

