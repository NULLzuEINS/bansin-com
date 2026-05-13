<?php
/**
 * Liest den Belegungskalender von ostsee-ferienwohnungen.de und speichert
 * das Ergebnis als JSON in data/belegung.json.
 *
 * Ausführung:
 *   php cron/fetch_belegung.php
 *
 * Cronjob (täglich 03:00):
 *   0 3 * * * php /path/to/cron/fetch_belegung.php
 */

declare(strict_types=1);

require __DIR__ . '/BelegungParser.php';

use Bansin\Cron\BelegungParser;

const SOURCE_URL  = 'https://www.ostsee-ferienwohnungen.de/o1397';
const OUTPUT_FILE = __DIR__ . '/../data/belegung.json';

// --- Seite laden ---

$ctx = stream_context_create(['http' => [
    'timeout'          => 15,
    'user_agent'       => 'Mozilla/5.0 (compatible; bansin.com-bot/1.0)',
    'follow_location'  => true,
]]);

$html = @file_get_contents(SOURCE_URL, false, $ctx);

if ($html === false) {
    fwrite(STDERR, "Fehler: Seite konnte nicht geladen werden.\n");
    exit(1);
}

// --- HTML parsen ---

$data = (new BelegungParser())->parse($html);

if (empty($data)) {
    fwrite(STDERR, "Fehler: Keine Kalenderdaten im HTML gefunden.\n");
    exit(1);
}

// --- Ausgabe speichern ---

$output = [
    'updated' => date('Y-m-d H:i:s'),
    'source'  => SOURCE_URL,
    'years'   => $data,
];

if (file_put_contents(OUTPUT_FILE, json_encode($output, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)) === false) {
    fwrite(STDERR, "Fehler: JSON konnte nicht geschrieben werden.\n");
    exit(1);
}

$years = implode(', ', array_keys($data));
echo "OK: Belegungsdaten für {$years} gespeichert (" . date('Y-m-d H:i:s') . ")\n";
