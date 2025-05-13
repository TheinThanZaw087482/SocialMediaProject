FROM php:8.2-apache

# Copy everything to web root
COPY . /var/www/html/

# Enable URL rewriting
RUN a2enmod rewrite

# Optional: Set working directory
WORKDIR /var/www/html

