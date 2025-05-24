FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql
# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy custom Apache config if any (optional)
# COPY apache.conf /etc/apache2/sites-available/000-default.conf

# Set permissions and ownership for the web root
RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

# Set working directory
WORKDIR /var/www/html