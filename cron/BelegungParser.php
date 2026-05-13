<?php

declare(strict_types=1);

namespace Bansin\Cron;

/**
 * Parst den Belegungskalender von ostsee-ferienwohnungen.de.
 *
 * Gibt ein Array der Form zurück:
 *   [ year => [ 'Jan' => [ day => status, ... ], ... ], ... ]
 *
 * Mögliche Status-Werte: free, reserved, arrival_only, departure_only
 */
class BelegungParser
{
    /**
     * @return array<int, array<string, array<int, string>>>
     */
    public function parse(string $html): array
    {
        if (trim($html) === '') {
            return [];
        }

        libxml_use_internal_errors(true);
        $dom = new \DOMDocument();
        $dom->loadHTML('<?xml encoding="UTF-8">' . $html);
        libxml_clear_errors();

        $xpath = new \DOMXPath($dom);

        // Nur Desktop-Tabellen – mobile und legend explizit ausschließen
        $tables = $xpath->query(
            '//table[contains(@class,"occupancy_calendar")' .
            ' and not(contains(@class,"mobile"))' .
            ' and not(contains(@class,"legend"))]'
        );

        $data = [];

        foreach ($tables as $table) {
            [$year, $calendar] = $this->parseTable($xpath, $table);

            if ($year !== null && count($calendar) > 0) {
                $data[$year] = $calendar;
            }
        }

        return $data;
    }

    /**
     * @return array{int|null, array<string, array<int, string>>}
     */
    private function parseTable(\DOMXPath $xpath, \DOMNode $table): array
    {
        $rows   = $xpath->query('.//tr', $table);
        $year   = null;
        $dayMap = [];
        $calendar = [];

        foreach ($rows as $rowIdx => $row) {
            $cells = $xpath->query('.//td', $row);

            if ($rowIdx === 0) {
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
                if (isset($dayMap[$colIdx]) && $cls !== '') {
                    $days[$dayMap[$colIdx]] = $cls;
                }
                $colIdx++;
            }

            if ($monthName !== null && count($days) > 0) {
                $calendar[$monthName] = $days;
            }
        }

        return [$year, $calendar];
    }
}
