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
                    <p class="erlaeuterung" style="margin-bottom:4px;">Zeitraum anklicken zum Hervorheben im Kalender:</p>
                    <table class="detail-table" id="preisTabelle">
                        <tr class="head"><td>Zeitraum</td><td>Preis / Nacht</td></tr>
                        <tr class="selectable-period" data-from="01-01" data-to="03-18" data-color="#aaa"><td>01.01. &ndash; 18.03.</td><td>&euro; 52,00</td></tr>
                        <tr class="selectable-period" data-from="03-19" data-to="04-02" data-color="#88bb88"><td>19.03. &ndash; 02.04.</td><td>&euro; 60,00</td></tr>
                        <tr class="selectable-period" data-from="04-03" data-to="05-08" data-color="#FFCC33"><td>03.04. &ndash; 08.05.</td><td>&euro; 65,00</td></tr>
                        <tr class="selectable-period" data-from="05-09" data-to="06-30" data-color="#FFCC33"><td>09.05. &ndash; 30.06.</td><td>&euro; 75,00</td></tr>
                        <tr class="selectable-period row-hs" data-from="07-01" data-to="09-08" data-color="#3399CC"><td>01.07. &ndash; 08.09.</td><td>&euro; 80,00</td></tr>
                        <tr class="selectable-period" data-from="09-09" data-to="10-18" data-color="#FFCC33"><td>09.09. &ndash; 18.10.</td><td>&euro; 75,00</td></tr>
                        <tr class="selectable-period" data-from="10-19" data-to="12-31" data-color="#88bb88"><td>19.10. &ndash; 31.12.</td><td>&euro; 60,00</td></tr>
                    </table>

                    <br>

                    <!-- Buchungskalender -->
                    <b>Aktuelle Belegung &amp; Buchung</b><br>

                    <?php if ($belegung):
                        $today    = new DateTimeImmutable('today');
                        $todayStr = $today->format('Y-n-j');
                        $curYear  = (int)$today->format('Y');

                        echo '<div class="buchung-wrap" id="buchungWrap">';
                        for ($m = 1; $m <= 12; $m++):
                            $y     = $curYear;
                            $mName = $monthNames[$m - 1];

                            if (!isset($belegung['years'][$y][$mName])) continue;

                            $dt       = new DateTimeImmutable("$y-$m-01");
                            $firstDow = (int)$dt->format('N');
                            $daysInM  = (int)$dt->format('t');
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
                                        <td class="<?= $cls . $isToday ?>" data-date="<?= sprintf('%04d-%02d-%02d', $y, $m, $cell) ?>"><?= $cell ?></td>
                                    <?php endif; $cell++; endfor; ?>
                                </tr>
                                <?php endwhile; ?>
                            </table>
                        </div>
                    <?php endfor; echo '</div>'; ?>

                        <table class="legende mt-[6px]">
                            <tr>
                                <td class="b-free w-[14px] h-[14px]">&nbsp;</td><td>Frei</td>
                                <td class="b-reserved w-[14px] h-[14px]">&nbsp;</td><td>Belegt</td>
                                <td class="b-arrival w-[14px] h-[14px]">&nbsp;</td><td>Nur Anreise</td>
                                <td class="b-departure w-[14px] h-[14px]">&nbsp;</td><td>Nur Abreise</td>
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

<style>
.selectable-period {
    cursor: pointer;
    transition: filter 0.1s;
}
.selectable-period:hover td {
    filter: brightness(0.92);
}
.selectable-period.active td {
    outline: 2px solid #333;
    outline-offset: -1px;
}
.monat-cal td.period-hl {
    outline-width: 2px;
    outline-style: solid;
    outline-offset: -2px;
}
</style>
<script>
(function () {
    var rows = document.querySelectorAll('.selectable-period');
    var calCells = document.querySelectorAll('.monat-cal td[data-date]');

    function clearHighlight() {
        rows.forEach(function (r) { r.classList.remove('active'); });
        calCells.forEach(function (td) {
            td.classList.remove('period-hl');
            td.style.outlineColor = '';
        });
    }

    rows.forEach(function (row) {
        row.addEventListener('click', function () {
            var wasActive = row.classList.contains('active');
            clearHighlight();
            if (wasActive) return;

            row.classList.add('active');
            var from  = row.dataset.from;  // "MM-DD"
            var to    = row.dataset.to;    // "MM-DD"
            var color = row.dataset.color;

            calCells.forEach(function (td) {
                var mmdd = td.dataset.date.slice(5); // "YYYY-MM-DD" → "MM-DD"
                if (mmdd >= from && mmdd <= to) {
                    td.classList.add('period-hl');
                    td.style.outlineColor = color;
                }
            });

            // Kalender in den sichtbaren Bereich scrollen
            var wrap = document.getElementById('buchungWrap');
            if (wrap) wrap.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        });
    });
}());
</script>

<?php include "inc/footer.inc.php"; ?>
