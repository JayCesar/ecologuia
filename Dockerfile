FROM php:8.2-apache

# Dependências do Moodle
RUN apt-get update && apt-get install -y \
    git unzip libpng-dev libjpeg-dev libfreetype6-dev \
    libxml2-dev libzip-dev libicu-dev libonig-dev \
    libxslt1-dev libcurl4-openssl-dev libpq-dev \
    ghostscript \
    && rm -rf /var/lib/apt/lists/*

# Extensões PHP necessárias
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install -j"$(nproc)" gd intl zip soap mysqli opcache exif

# Pasta onde o Moodle vai ficar
WORKDIR /var/www/html

# Copia o código do Moodle (que está em ./app) para dentro do container
COPY app/ /var/www/html/

# Configura o Apache para usar /var/www/html/public como DocumentRoot
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public

RUN a2enmod rewrite \
 && sed -ri "s#DocumentRoot /var/www/html#DocumentRoot ${APACHE_DOCUMENT_ROOT}#g" /etc/apache2/sites-available/000-default.conf \
 && sed -ri "s#<Directory /var/www/>#<Directory ${APACHE_DOCUMENT_ROOT}>#g" /etc/apache2/apache2.conf \
 && sed -ri "s/AllowOverride None/AllowOverride All/i" /etc/apache2/apache2.conf

# Configurações personalizadas do PHP
COPY php.ini /usr/local/etc/php/conf.d/custom.ini

# Pasta de dados do Moodle
RUN mkdir -p /var/www/moodledata \
 && chown -R www-data:www-data /var/www/html /var/www/moodledata
