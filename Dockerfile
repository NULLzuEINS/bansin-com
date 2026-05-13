FROM php:8.2-apache

# mod_rewrite (.htaccess) + mod_headers (Cache-Control)
RUN a2enmod rewrite headers

# Apache-Konfiguration
COPY .devcontainer/apache-config.conf /etc/apache2/sites-available/000-default.conf

# Composer aus offiziellem Image übernehmen
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Abhängigkeiten zuerst (Layer-Cache nutzen)
COPY composer.json ./
RUN composer install --no-dev --no-interaction --optimize-autoloader

# Quellcode kopieren
COPY . .

# data/-Verzeichnis anlegen und Schreibrechte setzen (für belegung.json)
RUN mkdir -p data && chown -R www-data:www-data data

EXPOSE 80
