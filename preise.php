<?php include "inc/header.inc.php"; ?>

<?php
function getSeason(int $month, int $day): string
{
    $md = $month * 100 + $day;
    if ($md >= 701 && $md <= 908) return 'hs';
    if (($md >= 509 && $md <= 630) || ($md >= 909 && $md <= 1018)) return 'zs';
    return 'vs';
}

$monthNames  = ['Jan','Feb','Mär','Apr','Mai','Jun','Jul','Aug','Sep','Okt','Nov','Dez'];
$monthsFull  = ['Januar','Februar','März','April','Mai','Juni','Juli','August','September','Oktober','November','Dezember'];
$daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

// Belegungsdaten laden
$belegung     = null;
$belegungFile = __DIR__ . '/data/belegung.json';
if (file_exists($belegungFile)) {
    $json = json_decode(file_get_contents($belegungFile), true);
    if ($json && isset($json['years'])) {
        $belegung = $json;
    }
}

// Verfügbarkeit für ein konkretes Datum aus dem JSON lesen
function getDayStatus(?array $belegung, int $year, int $month, int $day, array $monthNames): string
{
    if (!$belegung) return '';
    $mName = $monthNames[$month - 1];
    return $belegung['years'][$year][$mName][$day] ?? '';
}

$statusCss = [
    'free'           => 'b-free',
    'reserved'       => 'b-reserved',
    'arrival_only'   => 'b-arrival',
    'departure_only' => 'b-departure',
];
?>


<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr bgcolor="#ffffff">
            <td valign="top" width="71%" height="31">
                <b><span class="ueberschrift">Ein fairer Preis!</span></b>
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td valign="top" width="71%">
                <hr size="1" color="#f0f0f0">
                <span class="inhalt">

                    <!-- Preis-Übersicht -->
                    <table class="preis-uebersicht">
                        <tr><td colspan="3"><b>Preis pro &Uuml;bernachtung *</b></td></tr>
                        <tr>
                            <td bgcolor="#3399CC"><font color="#ffffff">HS</font></td>
                            <td bgcolor="#3399CC"><font color="#ffffff">Hauptsaison</font></td>
                            <td bgcolor="#3399CC" align="right"><b><font color="#ffffff">&euro; 80,00</font></b></td>
                        </tr>
                        <tr>
                            <td bgcolor="#FFCC33">ZS</td>
                            <td bgcolor="#FFCC33">Zwischensaison</td>
                            <td bgcolor="#FFCC33" align="right"><b>&euro; 75,00</b></td>
                        </tr>
                        <tr>
                            <td bgcolor="#f0f0f0">VS</td>
                            <td bgcolor="#f0f0f0">Vorsaison</td>
                            <td bgcolor="#f0f0f0" align="right"><b>&euro; 52,00</b></td>
                        </tr>
                    </table>

                    <br>

                    <!-- Detaillierte Saisonpreise -->
                    <table class="detail-table">
                        <tr class="head"><td>Zeitraum</td><td>Preis / Nacht</td></tr>
                        <tr><td>01.01. &ndash; 18.03.</td><td>&euro; 52,00</td></tr>
                        <tr><td>19.03. &ndash; 02.04.</td><td>&euro; 60,00</td></tr>
                        <tr><td>03.04. &ndash; 08.05.</td><td>&euro; 65,00</td></tr>
                        <tr><td>09.05. &ndash; 30.06.</td><td>&euro; 75,00</td></tr>
                        <tr class="row-hs"><td>01.07. &ndash; 08.09.</td><td>&euro; 80,00</td></tr>
                        <tr><td>09.09. &ndash; 18.10.</td><td>&euro; 75,00</td></tr>
                        <tr><td>19.10. &ndash; 31.12.</td><td>&euro; 60,00</td></tr>
                    </table>

                    <br>

                    <!-- Buchungskalender -->
                    <b>Aktuelle Belegung &amp; Buchung</b><br>

                    <?php if ($belegung):
                        $today     = new DateTimeImmutable('today');
                        $todayStr  = $today->format('Y-n-j'); // für Vergleich

                        // 4 Monate ab heute anzeigen
                        $shown = 0;
                        echo '<div class="buchung-wrap">';
                        for ($offset = 0; $offset < 6 && $shown < 4; $offset++):
                            $dt    = $today->modify("+{$offset} month")->modify('first day of this month');
                            $y     = (int)$dt->format('Y');
                            $m     = (int)$dt->format('n');
                            $mName = $monthNames[$m - 1];

                            // Nur anzeigen wenn Daten vorhanden
                            if (!isset($belegung['years'][$y][$mName])) continue;
                            $shown++;

                            $firstDow  = (int)$dt->format('N'); // 1=Mo … 7=So
                            $daysInM   = (int)$dt->format('t');
                    ?>
                        <div class="monat-block">
                            <h4><?= $monthsFull[$m - 1] ?> <?= $y ?></h4>
                            <table class="monat-cal">
                                <tr>
                                    <?php foreach (['Mo','Di','Mi','Do','Fr','Sa','So'] as $wd): ?>
                                        <th><?= $wd ?></th>
                                    <?php endforeach; ?>
                                </tr>
                                <?php
                                $cell = 1 - $firstDow + 1; // erster Tag in Woche 1 (kann negativ sein)
                                while ($cell <= $daysInM):
                                ?>
                                <tr>
                                    <?php for ($col = 1; $col <= 7; $col++):
                                        if ($cell < 1 || $cell > $daysInM):
                                    ?>
                                        <td class="leer">&nbsp;</td>
                                    <?php else:
                                        $status  = getDayStatus($belegung, $y, $m, $cell, $monthNames);
                                        $cls     = $statusCss[$status] ?? 'b-unknown';
                                        $isToday = ($y . '-' . $m . '-' . $cell === $todayStr) ? ' today' : '';
                                    ?>
                                        <td class="<?= $cls . $isToday ?>"><?= $cell ?></td>
                                    <?php endif; $cell++; endfor; ?>
                                </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    <?php endfor;
                        echo '</div>';
                    ?>

                        <table class="legende" style="margin-top:6px;">
                            <tr>
                                <td class="b-free" style="width:14px;height:14px;">&nbsp;</td><td>Frei</td>
                                <td class="b-reserved" style="width:14px;height:14px;">&nbsp;</td><td>Belegt</td>
                                <td class="b-arrival" style="width:14px;height:14px;">&nbsp;</td><td>Nur Anreise</td>
                                <td class="b-departure" style="width:14px;height:14px;">&nbsp;</td><td>Nur Abreise</td>
                            </tr>
                        </table>

                        <div class="beleg-updated">
                            Aktualisiert: <?= htmlspecialchars($belegung['updated']) ?>
                        </div>

                        <a class="buchungs-btn" href="https://www.ostsee-ferienwohnungen.de/o1397" target="_blank">
                            Jetzt buchen auf ostsee-ferienwohnungen.de &raquo;
                        </a>

                    <?php else: ?>
                        <p class="erlaeuterung">
                            Belegungsdaten werden t&auml;glich aktualisiert.<br>
                            Aktuell keine Daten verf&uuml;gbar.
                        </p>
                        <a class="buchungs-btn" href="https://www.ostsee-ferienwohnungen.de/o1397" target="_blank">
                            Jetzt buchen auf ostsee-ferienwohnungen.de &raquo;
                        </a>
                    <?php endif; ?>

                    <br><br>

                    <p class="erlaeuterung">
                        * zzgl. Nebenkosten:<br>
                        &ndash; Endreinigung &euro; 30,00<br>
                        &ndash; Kurtaxe &euro; 3,20 pro Person / Tag<br>
                        &ndash; Preise gelten f&uuml;r 2 Personen<br>
                        &ndash; Aufbettung: Erw. &euro; 12,00 / Tag, Kinder &euro; 6,00 / Tag<br>
                        &ndash; Bettw&auml;sche: &euro; 9,00 / Person (auf Anfrage)
                    </p>

                    Falls Sie Fragen haben, schreiben Sie uns eine Email: <a href="mailform.php">HIER</a> klicken.

                </span>
            </td>
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>
