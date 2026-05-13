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

libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML('<?xml encoding="UTF-8">' . $html);
libxml_clear_errors();
$xpath = new DOMXPath($dom);

$data = [];

// Desktop-Tabellen: class="occupancy_calendar" ohne "mobile" oder "legend"
$tables = $xpath->query('//table[contains(@class,"occupancy_calendar") and not(contains(@class,"mobile")) and not(contains(@class,"legend"))]');

foreach ($tables as $table) {
    $rows = $xpath->query('.//tr', $table);
    $year     = null;
    $dayMap   = [];   // Index → Tageszahl
    $calendar = [];

    foreach ($rows as $rowIdx => $row) {
        $cells = $xpath->query('.//td', $row);

        if ($rowIdx === 0) {
            // Kopfzeile: Jahr + Tagesnummern
            $colIdx = 0;
            foreach ($cells as $cell) {
                $cls = trim($cell->getAttribute('class'));
                if ($cls === 'year') {
                    $year = (int) trim($cell->textContent);
                } elseif ($cls === 'day') {
                    $dayMap[$colIdx] = (int) trim($cell->textContent);
                }
                $colIdx++;
            }
            continue;
        }

        // Monatszeile
        $monthName = null;
        $days      = [];
        $colIdx    = 0;

        foreach ($cells as $cell) {
            $cls = trim($cell->getAttribute('class'));
            if ($cls === 'month') {
                $monthName = trim($cell->textContent);
                $colIdx++;
                continue;
            }
            // Tagesstatus (free, reserved, arrival_only, departure_only)
            if (isset($dayMap[$colIdx]) && $cls !== '') {
                $days[$dayMap[$colIdx]] = $cls;
            }
            $colIdx++;
        }

        if ($monthName !== null && count($days) > 0) {
            $calendar[$monthName] = $days;
        }
    }

    if ($year !== null && count($calendar) > 0) {
        $data[$year] = $calendar;
    }
}

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
