<?php include "inc/header.inc.php"; ?>
<?php include "inc/image.inc.php"; ?>
<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr>
            <td align="left" valign="top">
                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody>
                        <tr bgcolor="#ffffff">
                            <td height="41" colspan="2" valign="top">
                                <font face="Verdana, Arial, Helvetica!, sans-serif" size="2">
                                    <b><span class="ueberschrift">Anreisen mit System!</span></b>
                                </font>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td valign="top" width="55%" height="260">
                                <hr size="1" color="#f0f0f0" class="trenner">
                                <table border="0" width="435" height="12" bgcolor="#3399cc" cellpadding="0" cellspacing="0">
                                    <tr align="center">
                                        <td height="10"><a href="anreise-auto.php">
                                                <font color="#ffffff">Auto</font>
                                            </a></td>
                                        <td height="10"><a href="anreise-bahn.php">
                                                <font color="#ffffff">Bahn</font>
                                            </a>
                                        <td height="10"><a href="anreise-bus.php">
                                                <font color="#ffffff">Bus</font>
                                            </a></td>
                                        <td height="10"><a href="anreise-flugzeug.php">
                                                <font color="#ffffff">Flugzeug</font>
                                            </a>
                                        </td>
                                        <td height="10"><a href="anreise-schiff.php">
                                                <font color="#ffffff">Schiff</font>
                                            </a></td>
                                    <tr>
                                </table>
                                <br> <span class="inhalt"><img src="bilder/auto.gif" alt="Quelle: http://www.renault.de"
                                        hspace="5" border="0" align="left">
                                    Hier haben Sie durch den Service von <a href="http://web.de" target="insel">
                                        WEB.DE</a> die Möglichkeit, Ihre Fahrtroute direkt von Ihrem "Heimathafen" erstellen und anschliessend ausdrucken zu lassen.
                                    Weiter unten sehen Sie in einer Übersicht eine Beschreibung nach Himmelsrichtungen.</span>


                                    <br>
                                    <br>
                                <!-- AUTO HIMMELSRICHTUNG -->

                                <table border="0" cellpadding="0" cellspacing="0" width="435">
                                    <tr>
                                        <td width="435" bgcolor="#3399cc" class="headlines">
                                            <font color="#ffffff">Straßenanbindung</font>
                                        </td>
                                    </tr>
                                </table>
                                <?PHP $sueden = '
 <table width="435" border="0" cellspacing="0" cellpadding="0" align="center">

 <tr>
 <td colspan="2" bgcolor="#f0f0f0"><br>
 <ul>
 <table cellspacing="0" cellpadding="5" width="350">
 <tr bgcolor="#CCCCCC">
 <td colspan="3" class="erlaeuterung"><b>Von Süden</b></td>
 </tr>
 <tr bgcolor="#f0f0f0">
 <td width="350" bgcolor="#FFFFFF" class="erlaeuterung">
 Sie benutzen die Autobahn Richtung Stettin (A 11), dann über den neuen
 Abschnitt der A 20 bis Pasewalk,
 weiter über die B 109 nach Anklam oder Wolgast. <br>
 Oder Sie fahren aus Richtung Berlin, Abzeig Birkenwerder, die B 96 bis kurz
 hinter Jarmen und biegen dort nach rechts ab, Richtung Gützkow, auf
 die B 111 nach Wolgast und weiter auf die Insel.<br><br>

 Wollen Sie nun in den südlichen Teil Usedoms ( Usedom, Ahlbeck, Heringsdorf,
 Bansin),<br>
 empfiehlt es sich, hinter Anklam die B 110 über Zecherin zu nehmen.<br>
 Den Norden der Insel (Peenemünde, Zinnowitz, Trassenheide) erreicht
 man dagegen besser über Wolgast. Sie biegen also nicht hinter Anklam
 ab, sondern fahren die B 109 weiter bis Möckowberg (Ampelkreuzung).
 Hier ordnen Sie sich rechts ein und folgen dann der B 111 nach Wolgast.
 </td></tr></table>

 </ul>
 </td>
 </tr>';
                                echo $sueden;
                                ?>

                        <tr>
                            <td colspan="2" bgcolor="#f0f0f0">
                                <ul>
                                    <?PHP $westen = '<table cellspacing="0" cellpadding="5" width="350">
 <tr bgcolor="#CCCCCC">
 <td colspan="3" class="erlaeuterung"><b>Von Westen</b></td>
 </tr>
 <tr bgcolor="#f0f0f0">
 <td width="350" bgcolor="#FFFFFF" class="erlaeuterung">
 <br> kommend aus Richtung Hamburg<br>
 - auf der A1 über Lübeck,<br>
 fahren über die B104 auf die A20, verlassen
 die Autobahn bei Tessin und fahren die B 110 über Demmin, bis Jarmen<br>
 - oder die A24 bis Abzweig Neustadt-Glewe auf die B 191 über Parchim bis Plau,
 dann auf die B 103 bis zum Abzeig auf die B 104 bis Teterow (Richtung
 Neubrandenburg) und fahren von Teterow die B 104, vor Malchin links
 ab über Neukalen, Dargun auf die B 110, Demmin bis Jarmen
 <br><br> und dann<br>
 - auf die B 96 (Richtung Greifswald), nach ca. 5 km rechts ab auf
 die B 111 über Gützkow, Möckowberg(Ampelkreuzung) in
 Richtung Wolgast (Brücke) auf die Insel (Norden-Mitte)<br>
 oder,<br>
 <br>
 - die B 110 weiter über Anklam, Zecherin (Brücke) und Usedom
 in den südlichen und mittleren Teil der Insel. <br>
 <br>
 Weniger günstig, weil stark befahren, ist die B 105 bis nach
 Stralsund, dann die B 96, Richtung Greifswald. Ab Greifswald benutzen
 Sie die B 109, Richtung Anklam, um dann in Möckowberg (Ampelkreuzung)
 auf die B 111, Richtung Wolgast, abzubiegen. Sie können aber
 auch auf der B 110 bleiben und erreichen die Insel dann über
 Anklam - Zecherin. <br>
 Auf Wolgast als Nadelöhr sei an dieser Stelle nochmals hingewiesen.
 </td></tr></table>';
                                    echo $westen;

                                    ?>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2" bgcolor="#f0f0f0">
                                <ul>
                                    <?PHP $brueckenoeffnungszeiten = '<table cellspacing="0" cellpadding="5" width="350">
 <tr bgcolor="#CCCCCC">
 <td colspan="3" class="erlaeuterung"> <b>Brücken-öffnungszeiten</b></td>
 </tr>
 <tr bgcolor="#f0f0f0">

 <td width="150" bgcolor="#FFFFFF" class="erlaeuterung">Zecheriner Brücke<br>
 (B 110)<br>
 05.35 - 05.50 Uhr<br>
 08.35 - 08.50 Uhr<br>
 12.35 - 12.50 Uhr<br>
 16.35 - 16.50 Uhr<br>
 20.35 - 20.50 Uhr<br>
 </td>
 <td width="139" height="98" bgcolor="#FFFFFF" class="erlaeuterung"> Wolgaster Brücke<br>
 (B 111) <br>
 05.20 - 05.50 Uhr<br>
 08.40 - 09.10 Uhr<br>
 12.40 - 13.10 Uhr<br>
 16.40 - 17.10 Uhr<br>
 20.40 - 21.10 Uhr<br>
 23.30 n. Anmeldung
 </td>
 </tr>
 </table>
 <br>


 <table width="350" border="0" cellspacing="0" cellpadding="2">
 <tr>
 <td bgcolor="#CCCCCC" width="200" class="erlaeuterung"><b>Sender und Frequenzen</b></td>
 <td bgcolor="#CCCCCC" width="100">&nbsp;</td>
 </tr>
 <tr bgcolor="#FFFFFF">
 <td width="200" class="erlaeuterung">Antenne Mecklenburg-Vorpommern </td>
 <td width="100" class="erlaeuterung">103.8, 105.1, 105.4</td>
 </tr>
 <tr bgcolor="#FFFFFF">
 <td width="200" class="erlaeuterung">Ostseewelle</td>
 <td width="100" class="erlaeuterung">103.3</td>
 </tr>
 <tr bgcolor="#FFFFFF">
 <td width="200" class="erlaeuterung">NDR 2</td>
 <td width="100" class="erlaeuterung">94.0</td>
 </tr>
 </table>
 </ul>
 </td>
 </tr>

</table>';
                                    echo $brueckenoeffnungszeiten;
                                    ?>


                            </td>
                            <td valign="top" width="45%">
                                <div align="right">
                                    <br><br><a href="#"
                                        onclick="fenster('bilder/karte-usedom.gif','Karte von Usedom','Beachten Sie bei der Fahrt nach Usedom bitte die Brückenöffnungszeiten.')"><img
                                            src="bilder/karte-usedom.gif" alt="Ihre Ferienwohnung ist rot markiert"
                                            width="100" hspace="5" border="0"></a><br>
                                    <br>
                                    <a href="#"
                                        onclick="fenster('bilder/karte-bansin.gif','Übersicht Usedom','Haben Sie Bansin einmal erreicht ist es ein Kinderspiel zur Villa Cosima zu finden. Diese Karte soll Ihnen dabei helfen.')"></p>
                                        <img src="bilder/karte-bansin.gif"
                                            alt="kompfortale Sitzgelegenheit an großen Fenstern" width="100" hspace="5"
                                            border="0"></a></p>

                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </td>
        </tr>
    </tbody>
</table>


<?php include "inc/footer.inc.php"; ?>