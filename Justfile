# Bansin.com – Taskrunner
# Voraussetzung: Docker läuft lokal

set shell := ["sh", "-c"]

IMAGE_PHP      := "php:8.2-cli"
IMAGE_COMPOSER := "composer:2"
WORKDIR        := justfile_directory()

# Standardziel
default: test

# Composer-Dependencies installieren
install:
    docker run --rm \
        -v "{{WORKDIR}}:/app" \
        {{IMAGE_COMPOSER}} \
        composer install --no-interaction --working-dir=/app

# PHPUnit-Tests ausführen (installiert automatisch zuerst)
test: install
    docker run --rm \
        -v "{{WORKDIR}}:/app" \
        -w /app \
        {{IMAGE_PHP}} \
        vendor/bin/phpunit

# Tests ohne vorherige composer install (wenn vendor/ schon vorhanden)
test-only:
    docker run --rm \
        -v "{{WORKDIR}}:/app" \
        -w /app \
        {{IMAGE_PHP}} \
        vendor/bin/phpunit

# Einmalig Belegungsdaten scrapen (benötigt Netzwerkzugriff)
fetch:
    docker run --rm \
        -v "{{WORKDIR}}:/app" \
        -w /app \
        {{IMAGE_PHP}} \
        php cron/fetch_belegung.php

# Docker-Image bauen
build:
    docker build -t bansin-com .

# Gebautem Image lokal starten (Port 8080); data/ wird gemountet damit belegung.json verfügbar ist
serve: build
    docker run --rm -p 8080:80 \
        -v "{{WORKDIR}}/data:/var/www/html/data" \
        bansin-com

# CSS aus Tailwind-Quelle bauen
css:
    npm run css:build

# CSS im Watch-Modus bauen (Entwicklung)
css-watch:
    npm run css:watch

# Vendor-Verzeichnis aufräumen
clean:
    rm -rf "{{WORKDIR}}/vendor" "{{WORKDIR}}/node_modules"
