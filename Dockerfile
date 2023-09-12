# Use the official PHP image with Apache.
FROM php:7.4-apache

# Install any PHP extensions you might need.
# For example, here's how you might install the mysqli extension:
# RUN docker-php-ext-install mysqli

# Set the document root to the default Apache directory.
WORKDIR /var/www/html

# Copy the PHP files from your host to the container.
COPY index.php /var/www/html/

# Expose port 80 for the Apache web server.
EXPOSE 80

# Use the default command from the PHP image.
CMD ["apache2-foreground"]
