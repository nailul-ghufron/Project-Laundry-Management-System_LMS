FROM php:8.2-apache

# Enable Apache mod_rewrite for URL rewriting
RUN a2enmod rewrite

# Install PDO MySQL extension
RUN docker-php-ext-install pdo pdo_mysql

# Change DocumentRoot to /var/www/html/public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf
