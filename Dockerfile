FROM php:7.2-apache
MAINTAINER jhzeg96@gmail.com

RUN docker-php-ext-install pdo pdo_mysql