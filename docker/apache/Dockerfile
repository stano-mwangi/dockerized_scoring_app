FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache modules
RUN a2enmod rewrite

# Copy application files from the docker folder to the web root
COPY ./docker/ /var/www/html/
# Copy custom Apache virtual host configuration
COPY ./docker/apache/apache.conf /etc/apache2/sites-available/000-default.conf

# Set correct permissions
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set working directory to where index.php is
WORKDIR /var/www/html

# Default command
#CMD ["apache2-foreground"]
