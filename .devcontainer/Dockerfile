FROM --platform=linux/amd64 php:5.6-apache

# Setze die alten Debian-Quellen für Stretch (Archiv) und entferne stretch-updates
RUN sed -i '/stretch-updates/d' /etc/apt/sources.list \
    && sed -i 's|deb.debian.org/debian|archive.debian.org/debian|g' /etc/apt/sources.list \
    && sed -i 's|security.debian.org/debian-security|archive.debian.org/debian-security|g' /etc/apt/sources.list \
    && apt-get update && apt-get install -y \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    libzip-dev \
    zip \
    unzip \
    git \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd mysqli pdo pdo_mysql zip

# Aktiviere Apache-Module
RUN a2enmod rewrite

# Setze das Arbeitsverzeichnis
WORKDIR /var/www/html

# Erstelle einen nicht-root Benutzer
RUN useradd -ms /bin/bash vscode
RUN chown -R vscode:vscode /var/www/html

# Installiere Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer --version=1.10.22

# Setze die Berechtigungen
RUN chown -R vscode:vscode /var/www/html

# Wechsle zum vscode Benutzer
USER vscode

# Kopiere die Apache-Konfiguration
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Exponiere Port 80
EXPOSE 80 