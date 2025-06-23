FROM php:8.2-apache

# Install PHP extensions (adjust if you need others)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy PHP script into web root
COPY test4.php /var/www/html/

# Ensure permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
