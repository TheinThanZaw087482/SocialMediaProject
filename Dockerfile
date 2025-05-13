# Use official PHP 8.2 image with Apache
FROM php:8.2-apache

# Enable Apache rewrite module (for pretty URLs like in Laravel or login.php?user=1)
RUN a2enmod rewrite

# Copy all your project files into the Apache root directory
COPY . /var/www/html/

# Set permissions (optional, but good for Laravel or file uploads)
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Optional: If you use mysqli or pdo_mysql for MySQL connection
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Expose port 80 (standard web port)
EXPOSE 80
