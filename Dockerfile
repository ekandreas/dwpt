FROM php:5.5-apache

MAINTAINER Andreas Ek <andreas@aekab.se>

RUN a2enmod rewrite

RUN apt-get update && apt-get install -y mysql-client libmysqlclient-dev subversion

RUN docker-php-ext-install mysqli

ADD docker.conf /etc/apache2/sites-enabled/

EXPOSE 80