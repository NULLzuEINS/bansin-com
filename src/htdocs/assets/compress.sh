 #!/bin/bash

# Komnprimierung von Ressourcen

# CSS
rm -f css/bootstrap.min.css
find . -iname '*.css' -exec java -jar /Users/hacki/Applications/yuicompressor-2.4.7/build/yuicompressor-2.4.7.jar {} >> css/bootstrap.min.css \;

# JavaScript
rm -f js/bootstrap.all.js
find . -iname '*.js' -exec java -jar /Users/hacki/Applications/yuicompressor-2.4.7/build/yuicompressor-2.4.7.jar {} >> js/bootstrap.all.js \;

exit;