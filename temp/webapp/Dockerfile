FROM php:7.3-apache

RUN apt update -y
RUN apt install telnet -y
RUN apt install iputils-ping -y
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN apt-get update && apt-get upgrade -y
