FROM nginx:stable-alpine

ADD ./docker/local/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html
