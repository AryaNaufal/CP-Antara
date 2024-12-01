# Gunakan image PHP dengan Apache
FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libmariadb-dev \
    && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo pdo_mysql

RUN a2enmod rewrite

RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY . /var/www/html/CP-Antara

RUN chown -R www-data:www-data /var/www/html/CP-Antara && \
    chmod -R 755 /var/www/html/CP-Antara

EXPOSE 80

CMD ["apache2-foreground"]
