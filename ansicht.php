<?php include "inc/header.inc.php"; ?>

<style>
    .ausstattung-wrap { width: 100%; }
    .grunddaten { border-collapse: collapse; margin-bottom: 12px; font-size: 10pt; }
    .grunddaten td { padding: 2px 10px 2px 0; vertical-align: top; }
    .grunddaten td:first-child { color: #666; white-space: nowrap; }
    .kat-grid { display: flex; flex-wrap: wrap; gap: 10px 20px; margin-bottom: 8px; }
    .kat-block { min-width: 180px; }
    .kat-block h4 { margin: 0 0 3px; font-size: 10pt; color: #fff;
                    background: #4898bb; padding: 2px 6px; }
    .kat-block ul { margin: 0; padding: 0 0 0 14px; font-size: 9pt; }
    .kat-block ul li { padding: 1px 0; }
    .hinweis { font-size: 9pt; color: #555; margin-top: 6px; }
</style>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr bgcolor="#ffffff">
            <td valign="top" colspan="2" height="31">
                <b><span class="ueberschrift">Komfortable Ferienwohnung in der Villa Cosima</span></b>
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td valign="top" width="60%">
                <hr size="1" color="#f0f0f0">
                <span class="inhalt">

                    <!-- Grunddaten -->
                    <table class="grunddaten">
                        <tr><td>Gr&ouml;&szlig;e</td><td>43 m&sup2;, 1. Stock</td></tr>
                        <tr><td>Zimmer</td><td>1 Schlafraum, 1 Wohn-/Schlafraum</td></tr>
                        <tr><td>Personen</td><td>1&ndash;4 (max. 4 Erwachsene)</td></tr>
                        <tr><td>Strandentfernung</td><td>ca. 500 m (5 Gehminuten)</td></tr>
                        <tr><td>Adresse</td><td>Badstr. 18, 17429 Bansin</td></tr>
                        <tr><td>Internet</td><td>WLAN 200 Mbit/s</td></tr>
                        <tr><td>Erbaut</td><td>2000</td></tr>
                    </table>

                    <!-- Ausstattung nach Kategorien -->
                    <div class="kat-grid">

                        <div class="kat-block">
                            <h4>K&uuml;che</h4>
                            <ul>
                                <li>K&uuml;chenzeile</li>
                                <li>Herd &amp; Backofen</li>
                                <li>K&uuml;hlschrank mit Gefrierfach</li>
                                <li>Geschirrsp&uuml;ler</li>
                                <li>Mikrowelle</li>
                                <li>Kaffeemaschine</li>
                                <li>Toaster &amp; Wasserkocher</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Wohnbereich</h4>
                            <ul>
                                <li>Fernseher (SAT/Kabel)</li>
                                <li>DVD-Player, CD-Player, Radio</li>
                                <li>Stereoanlage</li>
                                <li>Schlafsofa</li>
                                <li>Telefon</li>
                                <li>Safe / Tresor</li>
                                <li>Babybett / Kinderbett</li>
                                <li>Kinderhochstuhl</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Bad</h4>
                            <ul>
                                <li>Dusche &amp; WC</li>
                                <li>Haarfön</li>
                                <li>B&uuml;geleisen &amp; Brett</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Au&szlig;enanlage &amp; Geb&auml;ude</h4>
                            <ul>
                                <li>Balkon</li>
                                <li>Wintergarten mit Esstisch</li>
                                <li>Terrasse</li>
                                <li>Garten / Liegewiese</li>
                                <li>Parkplatz am Haus</li>
                                <li>Fahrstuhl</li>
                                <li>Fahrradkeller</li>
                                <li>Abstellraum</li>
                                <li>Kinderspielplatz</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Wellness &amp; Sport</h4>
                            <ul>
                                <li>Sauna</li>
                                <li>Solarium</li>
                                <li>Schwimmbad</li>
                                <li>Meerblick</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Service &amp; Extras</h4>
                            <ul>
                                <li>Bettw&auml;sche inkl.</li>
                                <li>Geschirrt&uuml;cher inkl.</li>
                                <li>Handtücher inkl.</li>
                                <li>Waschmaschine</li>
                                <li>W&auml;schetrockner</li>
                                <li>Fahrr&auml;der verf&uuml;gbar</li>
                                <li>Strandkorb verf&uuml;gbar</li>
                                <li>Bollerwagen verf&uuml;gbar</li>
                                <li>Kurtaxfrei</li>
                                <li>Haustiere erlaubt</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Verpflegung (auf Anfrage)</h4>
                            <ul>
                                <li>Br&ouml;tchenservice</li>
                                <li>Fr&uuml;hst&uuml;ck</li>
                                <li>Halbpension</li>
                                <li>Vollpension</li>
                            </ul>
                        </div>

                        <div class="kat-block">
                            <h4>Besonderheiten</h4>
                            <ul>
                                <li>Allergikerfreundlich</li>
                                <li>Rollstuhlgerecht</li>
                                <li>Nichtraucher</li>
                                <li>Grillplatz / Grill</li>
                                <li>Liegen &amp; Gartenst&uuml;hle</li>
                            </ul>
                        </div>

                    </div>

                    <p class="hinweis">
                        Mehr Informationen und aktuelle Verf&uuml;gbarkeit auf
                        <a href="https://www.ostsee-ferienwohnungen.de/o1397" target="_blank">ostsee-ferienwohnungen.de</a>.
                    </p>

                </span>
            </td>
            <td valign="top" width="40%">
                <div align="right">
                    <p>
                        <a href="foto.php">
                            <img src="bilder/vilaacosima.jpg" alt="Villa Cosima – Ihre Ferienwohnung ist rot markiert"
                                 width="200" height="119" hspace="20" border="0"><br><br>
                            <img src="bilder/innenraum.jpg" alt="Komfortable Sitzgelegenheit an gro&szlig;en Fenstern"
                                 width="200" height="150" hspace="20" border="0">
                        </a>
                    </p>
                    <p><a href="foto.php">Mehr Fotos ansehen &raquo;</a></p>
                </div>
            </td>
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>
