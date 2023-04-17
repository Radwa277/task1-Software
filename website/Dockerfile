FROM php:8.1-apache
RUN apt-get update && \
    apt-get install -y curl libonig-dev libzip-dev unzip && \
    rm -rf /var/lib/apt/lists/*
RUN a2enmod rewrite
RUN docker-php-ext-install pdo_mysql zip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --no-cache  
COPY . /var/www/html
RUN cd /var/www/html && composer install --no-dev --prefer-dist --optimize-autoloader
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache
EXPOSE 80
CMD ["apache2-foreground"]  