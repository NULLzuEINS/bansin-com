# AGENTS.md — bansin.com

Regeln für KI-Agenten, die an diesem Projekt arbeiten.

## Überblick

PHP 8.2-Website für eine Ferienwohnung in Bansin/Usedom.
Stack: PHP 8.2 · Apache · Tailwind CSS 3.x · Composer.
Kein Framework, keine JS-Runtime im Production-Container.

## Deployment

- **Platform:** Coolify (self-hosted PaaS)
- **Build:** Docker (Dockerfile im Root)
- **Branch:** `main` → Production-Deploy
- **Trigger:** Coolify deployt bei Push auf `main`

Der Dockerfile verwendet einen Multi-Stage-Build:
1. Stage `css-builder` (Node 20): baut `css/styles.css` aus `css/input.css` via Tailwind
2. Stage PHP/Apache: kopiert das gebaute CSS in den Runtime-Container

## CSS

- Quelle: [`css/input.css`](css/input.css) mit `@tailwind`-Direktiven
- Output: [`css/styles.css`](css/styles.css) — **muss committed sein** (Fallback bei lokalem Build)
- Config: [`tailwind.config.js`](tailwind.config.js)
- Build-Befehl: `npm run css:build`
- Watch-Modus (lokal): `npm run css:watch`

**Regel:** Nach jeder Änderung an `css/input.css` oder `tailwind.config.js` muss `npm run css:build` ausgeführt und das Ergebnis committed werden. Der Docker-Build regeneriert die Datei ohnehin, aber das Commit stellt sicher, dass lokale Dev-Server ohne Node funktionieren.

## PHP-Struktur

```
inc/config.inc.php   — $serverAddress, Kontaktdaten
inc/header.inc.php   — HTML-Head, Navigation (included von jeder Seite)
inc/footer.inc.php   — Footer
inc/image.inc.php    — Bild-Popup-Helper
*.php                — Einzelseiten (index, preise, ferien, …)
```

Jede Seite includet `inc/header.inc.php` (und damit `config.inc.php`) am Anfang.

## Lokale Entwicklung

```bash
just serve       # Docker-Image bauen und auf Port 8080 starten
just css         # CSS einmalig bauen
just css-watch   # CSS im Watch-Modus
just test        # PHPUnit-Tests via Docker
```

Voraussetzung: Docker + just installiert.

## Tests

PHPUnit-Tests in `tests/`. Laufen via GitHub Actions (`.github/workflows/test.yml`) bei jedem Push.
Kein Frontend-Testing-Setup vorhanden.

## Reverse Proxy / HTTPS

Coolify nutzt Traefik als Reverse Proxy. TLS wird am Proxy terminiert — PHP sieht intern immer HTTP.
`$_SERVER['HTTPS']` ist daher nie gesetzt. Scheme-Erkennung muss `HTTP_X_FORWARDED_PROTO` auswerten (bereits in `inc/config.inc.php` implementiert). Niemals `$_SERVER['HTTPS']` allein zur Scheme-Bestimmung nutzen.

## Wichtige Constraints

- **Kein Node.js im Production-Container** — nur im css-builder Stage
- **Kein JS-Framework** — kein React, Vue, etc.
- **Kein CDN für CSS** — CSS wird lokal aus `css/styles.css` geladen
- **PHP direkt** — kein Laravel, Symfony o.ä.
- **`data/belegung.json`** ist gitignored und wird zur Laufzeit von `cron/fetch_belegung.php` befüllt; der `data/`-Ordner wird im Dockerfile angelegt
- **`vendor/`** ist gitignored; wird per Composer im Docker-Build installiert

## Netlify

Es existiert ein veraltetes Netlify-Projekt (`bansin.netlify.app`), das an den Branch `master` gebunden ist und seit September 2024 nicht mehr deployt wurde. Dieses Projekt ist nicht die aktive Production-Umgebung und kann ignoriert werden. Production läuft ausschließlich über Coolify + Docker.
