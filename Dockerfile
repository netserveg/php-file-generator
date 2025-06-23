# Use official PHP Apache image
FROM php:8.2-apache

# Enable mod_rewrite
RUN a2enmod rewrite

# Copy all files to the container
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html
