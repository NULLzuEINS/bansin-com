#!/bin/bash

# Prüfe ob eine Datei als Argument übergeben wurde
if [ $# -eq 0 ]; then
    echo "Bitte geben Sie eine Datei als Argument an."
    echo "Verwendung: $0 dateiname.html"
    exit 1
fi

# Prüfe ob die Datei existiert
if [ ! -f "$1" ]; then
    echo "Fehler: Die Datei '$1' existiert nicht."
    exit 1
fi

# Erstelle eine temporäre Datei
temp_file=$(mktemp)

# Konvertiere HTML-Tags und Attribute in Kleinbuchstaben
# 1. Tags in Kleinbuchstaben umwandeln
# 2. Attribute in Kleinbuchstaben umwandeln
# 3. Attribute-Werte in Anführungszeichen setzen
sed -E '
    # Tags in Kleinbuchstaben umwandeln
    s/<([A-Z][A-Z0-9]*)/<\L\1/g;
    s/<\/([A-Z][A-Z0-9]*)>/<\/\L\1>/g;
    
    # Attribute in Kleinbuchstaben umwandeln
    s/([A-Z][A-Za-z0-9]*)=/\L\1=/g;
    
    # Attribute-Werte in Anführungszeichen setzen (wenn noch nicht vorhanden)
    s/([a-z]+)=([^"'"'"'][^ >]*)([ >])/\1="\2"\3/g;
    
    # Mehrere Leerzeichen in einem Tag reduzieren
    s/[[:space:]]+/ /g;
' "$1" > "$temp_file"

# Ersetze die Originaldatei mit der konvertierten Version
mv "$temp_file" "$1"

echo "Konvertierung abgeschlossen: $1" 