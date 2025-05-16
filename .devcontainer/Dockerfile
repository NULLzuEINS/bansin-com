FROM nimmis/apache-php5

# Aktiviere PHP-Entwicklereinstellungen
RUN sed -i 's/display_errors = Off/display_errors = On/' /etc/php5/apache2/php.ini && \
    sed -i 's/display_startup_errors = Off/display_startup_errors = On/' /etc/php5/apache2/php.ini && \
    sed -i 's/error_reporting = E_ALL & ~E_DEPRECATED/error_reporting = E_ALL/' /etc/php5/apache2/php.ini && \
    sed -i 's/opcache.enable=1/opcache.enable=0/' /etc/php5/apache2/php.ini

# Setze den ServerName
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

COPY ./ /var/www/html

# Start Apache im Vordergrund
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]