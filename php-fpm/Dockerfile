FROM php:7.4.3-fpm-alpine3.11

RUN mkdir /code
RUN adduser nginx
RUN chown nginx /code

COPY code/index.php /code/

WORKDIR /code

CMD [ "php", "/code/index.php"]

