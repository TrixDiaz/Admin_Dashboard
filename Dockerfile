# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Install PDO extension for MySQL
RUN docker-php-ext-install pdo_mysql

# Set the working directory to /var/www/html
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html

# Enable Apache2 rewrite module
RUN a2enmod rewrite

# Expose port 80
EXPOSE 80
