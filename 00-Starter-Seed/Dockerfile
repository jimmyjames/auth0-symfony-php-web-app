FROM php:7.2-rc-alpine

RUN apk --update add \
	git openssl \
	&& rm /var/cache/apk/*

WORKDIR /home/app

ADD composer.json /home/app
ADD composer.lock /home/app
ADD app/ /home/app/app

RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php
RUN php -r "unlink('composer-setup.php');"
RUN php composer.phar --no-plugins --no-scripts install

ADD . /home/app

CMD php app/console server:run 0.0.0.0:8000

EXPOSE 8000
