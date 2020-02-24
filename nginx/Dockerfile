FROM nginx:1.17.8-alpine

RUN mkdir /code
RUN chown nginx /code
WORKDIR /code
COPY nginx.conf /etc/nginx/
COPY code/index.php /code/
CMD ["nginx", "-g", "daemon off;"]


