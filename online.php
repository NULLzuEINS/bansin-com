<?php include "inc/header.inc.php"; ?>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr bgcolor="#ffffff">
            <td valign="top" width="71%" height="31">
                <font face="Verdana, Arial, Helvetica, sans-serif" color="#333333" size="2">
                    <b><span class="ueberschrift">Herzlich Willkommen in den Ferien!</span></b>
                </font>
            </td>
            <td width="29%" height="25" rowspan="2" align="left" valign="top">
                <br><br><br><img height="135" alt="" src="bilder/bansin/beach.jpg" hspace="20" class="rechtspalte">
            </td> <!-- <img height="135" alt="" src="bilder/sonnenstuhl.gif" width="120" vspace="20" hspace="20" class="rechtspalte"> //-->
        </tr>
        <tr bgcolor="#ffffff">
            <td valign="top" width="71%" height="10">
                <hr size="1" color="#f0f0f0" class="trenner">
                <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <span class="inhalt">
                        wann auch immer Sie uns besuchen, Sie erwartet ein fairer Preis mit gutem service. <br>
                        Geben ihr Anreisedatum ein und Sie werden weiter wissen. </span></font>
            </td>
        </tr>

        <tr>

            <td valign="top" bgcolor="#ffffff">
                <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <span class="inhalt">
                        <?php
                        echo "
<table border=\"0\">
 <form action=\"{$SELF_PHP}\" method=\"get\" name=\"Meldeformular\">
 <tr><td>Ziel Datum </td>
 <td>

 <select name=\"ZielTag\" size=\"1\" style=\"width:80px;\">
 <option value=\"\">--</option>
 <option value=\"01\">01</option>
 <option value=\"02\">02</option>
 <option value=\"03\">03</option>
 <option value=\"03\">04</option>
 <option value=\"04\">05</option>
 <option value=\"05\">06</option>
 <option value=\"06\">07</option>
 <option value=\"07\">08</option>
 <option value=\"08\">09</option>
 <option value=\"10\">10</option>
 <option value=\"11\">11</option>
 <option value=\"12\">12</option>
 <option value=\"13\">13</option>
 <option value=\"14\">14</option>
 <option value=\"15\">15</option>
 <option value=\"16\">16</option>
 <option value=\"17\">17</option>
 <option value=\"18\">18</option>
 <option value=\"19\">19</option>
 <option value=\"20\">20</option>
 <option value=\"21\">21</option>
 <option value=\"22\">22</option>
 <option value=\"23\">23</option>
 <option value=\"24\">24</option>
 <option value=\"25\">25</option>
 <option value=\"26\">26</option>
 <option value=\"26\">27</option>
 <option value=\"28\">28</option>
 <option value=\"29\">29</option>
 <option value=\"30\">30</option>
 <option value=\"31\">31</option>
 </select>


 <select name=\"ZielMonat\" size=\"1\" style=\"width:80px;\">
 <option value=\"\">----</option>
 <option value=\"01\">Januar</option>
 <option value=\"02\">Frebruar</option>
 <option value=\"03\">Mï¿½rz</option>
 <option value=\"04\">April</option>
 <option value=\"05\">Mai</option>
 <option value=\"06\">Juni</option>
 <option value=\"07\">Juli</option>
 <option value=\"08\">August</option>
 <option value=\"09\">September</option>
 <option value=\"10\">Oktober</option>
 <option value=\"11\">November</option>
 <option value=\"12\">Dezember</option>
 </select>


 <select name=\"ZielJahr\" size=\"1\" style=\"width:80px;\">
 <option value=\"\">----</option>
 <option value=\"2003\">2003</option>
 <option value=\"2004\">2004</option>
 <option value=\"2005\">2005</option>
 <option value=\"2006\">2006</option>
 <option value=\"2007\">2007</option>
 </select>
 </td>
 </tr>


 <tr>
 <td>

 </td>
 <td>
 <input style=\"width:250px;border:0px;\" type=\"submit\" value=\"Daten eintragen\">
 </td>
 </tr>
 </table></form>";
                        if ($ZielTag == "" || $ZielMonat == "" || $ZielJahr == "") {
                            echo '<font color="red">Bitte wählen Sie eine Zeit</font>';
                        } else {
                            echo date("z-m-d-Y", mktime(0, 0, 0, $ZielMonat, $ZielTag, $ZielJahr)) . "<br>";

                            $SchaltJahr = date(L, mktime(0, 0, 0, $ZielMonat, $ZielTag, $ZielJahr));
                            $JahresTag = date(z, mktime(0, 0, 0, $ZielMonat, $ZielTag, $ZielJahr)) + 1;

                            echo "<p><b>Jahrstag: " . $JahresTag . "</b><br>";
                            echo "<p><b>SchaltJahr: " . $SchaltJahr . "</b><p>";
                        }




                        if ($SchaltJahr == 0) {
                            $HauptEinsVon = 170;
                            $HauptEinsBis = 243;
                            $HauptZweiVon = 353;
                            $HauptZweiBis = 365;
                            $HauptDreiVon = 1;
                            $HauptDreiBis = 3;


                            $ZwischenEinsVon = 107;
                            $ZwischenEinsBis = 170;
                            $ZwischenZweiVon = 244;
                            $ZwischenzweiBis = 277;

                            $VorEinsVon = 15;
                            $VorEinsBis = 106;
                            $VorZweiVon = 278;
                            $VorZweiBis = 353;
                        } else {
                            $HauptEinsVon = 170 + 1;
                            $HauptEinsBis = 243 + 1;
                            $HauptZweiVon = 353 + 1;
                            $HauptZweiBis = 365 + 1;
                            $HauptDreiVon = 1;
                            $HauptDreiBis = 3;


                            $ZwischenEinsVon = 107 + 1;
                            $ZwischenEinsBis = 170 + 1;
                            $ZwischenZweiVon = 244 + 1;
                            $ZwischenzweiBis = 277 + 1;

                            $VorEinsVon = 15;
                            $VorEinsBis = 106 + 1;
                            $VorZweiVon = 278 + 1;
                            $VorZweiBis = 353 + 1;
                        }

                        if (($JahresTag >= $HauptEinsVon && $JahresTag <= $HauptEinsBis) || ($JahresTag >= $HauptZweiVon && $JahresTag <= $HauptZweiBis) || ($JahresTag >= $HauptDreiVon && $JahresTag <= $HauptDreiBis)) {
                            echo "Zur Zeit ist Hauptsaison. Sie kï¿½nnen sich bei uns in der Villa Cosima
 fï¿½r nur 75ï¿½ am Tag einmieten und wundervolle Momente in Bansind und auf Usedom erleben.";
                        }
                        if (($JahresTag >= $ZwischenEinsVon && $JahresTag <= $ZwischenEinsBis) || ($JahresTag >= $ZwischenZweiVon && $JahresTag <= $ZwischenZweiBis)) {
                            echo "Zur Zeit ist Zwischensaison. Sie kï¿½nnen sich bei uns in der Villa Cosima
 fï¿½r nur <b>55ï¿½</b> am Tag einmieten und wundervolle Momente in Bansind und auf Usedom erleben.";
                        }
                        if (($JahresTag >= $VorEinsVon && $JahresTag <= $VorEinsBis) || ($JahresTag >= $VorZweiVon && $JahresTag <= $VorZweiBis)) {
                            echo "Zur Zeit haben wir die Vorsaison. Das
 heisst f&uuml;r sie, dass sie ein
 schn&auml;pchen machen k&ouml;nnen.
 Denn anl&auml;sslicher der etwas frischeren
 Jahreszeit haben wir die Preise f&uuml;r
 sie gesenkt. Sie kï¿½nnen sich bei uns in der Villa Cosima
 fï¿½r nur <b>41ï¿½</b> am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
                        }



                        ?>




            </td>
            <td valign="top" width="29%" height="128">
            </td>
        </tr>

    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>