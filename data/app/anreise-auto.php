 <?php include "inc/header.inc.php";?>
 <?php include "inc/image.inc.php";?>
 <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                      <TBODY>
                        <TR>
                          <TD align="left" valign="top">
                            <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                              <TBODY>
                                <TR bgColor=#ffffff>
                                  <TD height="41" colspan="2" vAlign="top">
                                  <font  face="Verdana, Arial, Helvetica!, sans-serif" size=2>
                        <b><span class="ueberschrift">Anreisen mit System!</span></b></font>
                                 </TD>
                                </TR>
                                <TR bgColor=#ffffff>
                                  <TD vAlign=top width="55%" height=260>
                                  <hr size="1" color="#f0f0f0" class="trenner">
<table border=0 width=435 height=12 bgcolor="#3399cc" cellpadding="0" cellspacing="0">
<tr align=center>
 <td  height=10><a href="anreise-auto.php"><font color="#ffffff">Auto</font></a></td>
 <td  height=10><a href="anreise-bahn.php"><font color="#ffffff">Bahn</font></a>
 <td  height=10><a href="anreise-bus.php"><font color="#ffffff">Bus</font></a></td>
 <td  height=10><a href="anreise-flugzeug.php"><font color="#ffffff">Flugzeug</font></a></td>
 <td  height=10><a href="anreise-schiff.php"><font color="#ffffff">Schiff</font></a></td>
<tr>
</table>
<br>                          <span class="inhalt"><img src="bilder/auto.gif" alt="Quelle: http://www.renault.de"   hspace="5" border=0 align=left>
Hier haben Sie durch den Service von <a href="http://web.de" target="insel">
WEB.DE</a> die M�glichkeit, Ihre Fahrtroute direkt von Ihrem "Heimathafen" erstellen und anschliessend ausdrucken zu lassen.
                                   Weiter unten sehen Sie in einer �bersicht eine Beschreibung nach Himmelsrichtungen.</span>

      <table border="0" cellpadding="0" cellspacing="0" width="435">
      <tr>
      <td width="435" bgcolor="#3399cc" class="headlines"><font color="#ffffff">Route berechnen</font></td>
      </tr>
      </table>
                                  <table border="0" cellpadding="0" cellspacing="0" width="435">
                                      <tr>
    </tr>

<tr>
    <td height="2" colspan="9" valign="top"><img src="http://img.web.de/v/p.gif" border="0" width="435" height="2" alt=""></td>
</tr>
<tr bgcolor="#EBECEE">
    <td height="11" colspan="9" valign="top"><img src="http://img.web.de/v/p.gif" border="0" width="435" height="11" alt=""></td>
</tr>
<tr bgcolor="#EBECEE">
    <td width="10" rowspan="4"><form name="webderoute2" method="post" target="webde" action="http://portale.web.de/Auto/Routenplaner/"><img src="http://img.web.de/v/p.gif" border="0" width="10" height="1" alt=""></td>
    <td width="150" colspan="3">Start</td>
    <td width="15" rowspan="4"><img src="http://img.web.de/v/p.gif" border="0" width="15" height="1" alt=""></td>
    <td width="150" colspan="3">Ziel</td>
    <td width="10" rowspan="4"><img src="http://img.web.de/v/p.gif" border="0" width="10" height="1" alt=""></td>
</tr>
<tr>
    <td bgcolor="#0176E3" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="150" height="1" alt=""></td>
    <td bgcolor="#FFC800" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="150" height="1" alt=""></td>
</tr>
<tr>
    <td bgcolor="#0176E3" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
    <td width="198" bgcolor="#FFFFFF" align="center" valign="middle">
    <table border="0" cellpadding="2" cellspacing="2" width="198">
    <tr>
        <td rowspan="3" width="1"></td>
        <td colspan="2" width="180"><font face="Verdana, Arial, Helvetica" size="3"><input type="TEXT" name="fromstreet" value="Stra�e" size="12" style="width: 178px" tabindex="1" onfocus="javascript:if (document.webderoute2.fromstreet.value == 'Stra�e') document.webderoute2.fromstreet.value = '';"></font></td>
        <td rowspan="3" width="1"></td>
    </tr>
    <tr>
        <td width="58"><font face="Verdana, Arial, Helvetica" size="3"><input type="TEXT" name="fromplz" value="PLZ" size="3" style="width: 50px"  maxlength="10" tabindex="2" onfocus="javascript:if (document.webderoute2.fromplz.value == 'PLZ') document.webderoute2.fromplz.value = '';"></font></td>
        <td width="118"><font face="Verdana, Arial, Helvetica" size="3"><input type="TEXT" name="fromcity" value="Ort" size="8" style="width: 120px" tabindex="3" onfocus="javascript:if (document.webderoute2.fromcity.value == 'Ort') document.webderoute2.fromcity.value = '';"></font></td>
    </tr>
    <tr>
        <td colspan="2"><font face="Verdana, Arial, Helvetica" size="2"><select name="fromcountry" tabindex="4" style="width: 178px">
            <option value="---">Bitte w�hlen...</option>
            <option value="BEL">Belgien</option>
            <option value="DNK">D�nemark</option>
            <option value="DEU">Deutschland</option>
            <option value="FRA">Frankreich</option>
            <option value="GBR">Gro�britannien</option>
            <option value="ITA">Italien</option>
            <option value="LIE">Liechtenstein</option>
            <option value="LUX">Luxemburg</option>
            <option value="NLD">Niederlande</option>
            <option value="NOR">Norwegen</option>
            <option value="AUT">�sterreich</option>
            <option value="PRT">Portugal</option>
            <option value="SWE">Schweden</option>
            <option value="CHE">Schweiz</option>
            <option value="ESP">Spanien</option>
            </select></font></td>
    </tr>
    </table>
    </td>
    <td bgcolor="#0176E3" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
    <td bgcolor="#FFC800" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
    <td align="center" valign="middle" bgcolor="#FFFFFF" width="198">
    <table border="0" cellpadding="2" cellspacing="2" width="198">
    <tr>
        <td rowspan="3" width="1"></td>
        <td><font face="Verdana, Arial, Helvetica" size="2"><b>Villa Cosima</b></font></td>
        <td rowspan="3" width="1"></td>
    </tr>
    <tr><td><font face="Verdana, Arial, Helvetica" size="2"><input type="hidden" name="tostreet" value="Badstra�e 18">Badstra�e 18</font></td></tr>
    <tr><td><font face="Verdana, Arial, Helvetica" size="2"><input type="hidden" name="tocountry" value="DEU"><input type="hidden" name="toplz" value="17429"><input type="hidden" name="tocity" value="Seebad Bansin">D - 17429 Seebad Bansin</font></td></tr>
    </table>
    </td>
    <td bgcolor="#FFC800" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
</tr>
<tr>
    <td bgcolor="#0176E3" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
    <td bgcolor="FFC800" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
</tr>
<tr bgcolor="#EBECEE">
    <td height="50" colspan="9" align="right" valign="middle"><input type="submit" value="Berechnen"  style="font-family:verdana,helvetica,arial,sans-serif;font-size:8pt;color: #ffffff; width:65px;border-color:#ffffff;background-color:#3399cc;border-width:1;border-style:solid">&nbsp;&nbsp;&nbsp;</td>
</tr>
<tr><td height="10" colspan="9" ></form><img src="http://img.web.de/v/p.gif" width="1" height="10" border="0" alt=""></td></tr>
</table>


<br><br>
<!-- AUTO HIMMELSRICHTUNG -->

      <table border="0" cellpadding="0" cellspacing="0" width="435">
      <tr>
      <td width="435" bgcolor="#3399cc" class="headlines"><font color="#ffffff">Stra�enanbindung</font></td>
      </tr>
      </table>
 <?PHP $sueden= '
       <table width="435" border="0" cellspacing="0" cellpadding="0" align="center">

    <tr>
      <td colspan="2" bgcolor="#f0f0f0"><br>
      <ul>
 <table cellspacing="0" cellpadding="5" width="350">
            <tr bgcolor="#CCCCCC">
              <td colspan="3" class="erlaeuterung"><b>Von S&uuml;den</b></td>
            </tr>
            <tr bgcolor="#f0f0f0">
            <td width="350"  bgcolor="#FFFFFF" class="erlaeuterung">
		  Sie benutzen die Autobahn Richtung Stettin (A 11), dann &uuml;ber den neuen
          Abschnitt der A 20 bis Pasewalk,
		  weiter &uuml;ber die B 109 nach Anklam oder Wolgast. <br>
          Oder Sie fahren aus Richtung Berlin, Abzeig Birkenwerder, die B 96 bis kurz
          hinter Jarmen und biegen dort nach rechts ab, Richtung G&uuml;tzkow, auf
          die B 111 nach Wolgast und weiter auf die Insel.<br><br>

		  Wollen Sie nun in den s&uuml;dlichen Teil Usedoms ( Usedom, Ahlbeck, Heringsdorf,
          Bansin),<br>
          empfiehlt es sich, hinter Anklam die B 110 &uuml;ber Zecherin zu nehmen.<br>
          Den Norden der Insel (Peenem&uuml;nde, Zinnowitz, Trassenheide) erreicht
          man dagegen besser &uuml;ber Wolgast. Sie biegen also nicht hinter Anklam
          ab, sondern fahren die B 109 weiter bis M&ouml;ckowberg (Ampelkreuzung).
          Hier ordnen Sie sich rechts ein und folgen dann der B 111 nach Wolgast.
        </td></tr></table>

        </ul>
      </td>
    </tr>';
    echo $sueden;
    ?>

    <tr>
      <td colspan="2" bgcolor="#f0f0f0" >
              <ul>
<?PHP $westen= '<table cellspacing="0" cellpadding="5" width="350">
            <tr bgcolor="#CCCCCC">
              <td colspan="3" class="erlaeuterung"><b>Von Westen</b></td>
            </tr>
            <tr bgcolor="#f0f0f0">
            <td width="350"  bgcolor="#FFFFFF" class="erlaeuterung">
          <br> kommend aus Richtung Hamburg<br>
		  -  auf der A1 &uuml;ber L&uuml;beck,<br>
          fahren &uuml;ber die B104 auf die A20, verlassen
          die Autobahn bei Tessin und fahren die B 110 &uuml;ber Demmin, bis Jarmen<br>
          - oder die A24 bis Abzweig Neustadt-Glewe auf die B 191 &uuml;ber Parchim bis Plau,
          dann auf die B 103 bis zum Abzeig auf die B 104 bis Teterow (Richtung
          Neubrandenburg) und fahren von Teterow die B 104, vor Malchin links
          ab &uuml;ber Neukalen, Dargun auf die B 110, Demmin bis Jarmen
         <br><br> und dann<br>
            - auf die B 96 (Richtung Greifswald), nach ca. 5 km rechts ab auf
            die B 111 &uuml;ber G&uuml;tzkow, M&ouml;ckowberg(Ampelkreuzung) in
            Richtung Wolgast (Br&uuml;cke) auf die Insel (Norden-Mitte)<br>
            oder,<br>
            <br>
            - die B 110 weiter &uuml;ber Anklam, Zecherin (Br&uuml;cke) und Usedom
            in den s&uuml;dlichen und mittleren Teil der Insel. <br>
            <br>
            Weniger g&u&uuml;nstig, weil stark befahren, ist die B 105 bis nach
            Stralsund, dann die B 96, Richtung Greifswald. Ab Greifswald benutzen
            Sie die B 109, Richtung Anklam, um dann in M&ouml;ckowberg (Ampelkreuzung)
            auf die B 111, Richtung Wolgast, abzubiegen. Sie k&ouml;nnen aber
            auch auf der B 110 bleiben und erreichen die Insel dann &uuml;ber
            Anklam - Zecherin. <br>
            Auf Wolgast als Nadel&ouml;hr sei an dieser Stelle nochmals hingewiesen.
                </td></tr></table>';
                echo $westen;

?>
        </ul>
      </td>
    </tr>
    <tr>
      <td colspan="2" bgcolor="#f0f0f0">
        <ul>
<?PHP $brueckenoeffnungszeiten= '<table cellspacing="0" cellpadding="5" width="350">
            <tr bgcolor="#CCCCCC">
              <td colspan="3" class="erlaeuterung"> <b>Br&uuml;cken-&Ouml;ffnungszeiten</b></td>
            </tr>
            <tr bgcolor="#f0f0f0">

              <td width="150"  bgcolor="#FFFFFF" class="erlaeuterung">Zecheriner Br&uuml;cke<br>
                (B 110)<br>
                05.35 - 05.50 Uhr<br>
                08.35 - 08.50 Uhr<br>
                12.35 - 12.50 Uhr<br>
                16.35 - 16.50 Uhr<br>
                20.35 - 20.50 Uhr<br>
              </td>
              <td width="139" height="98" bgcolor="#FFFFFF" class="erlaeuterung"> Wolgaster Br&uuml;cke<br>
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





        </TD>
                                  <TD vAlign=top width="45%"><div align="right">
                                      <br><br><a  href="#" onclick="fenster('bilder/karte-usedom.gif','Karte von Usedom','Beachten Sie bei der Fahrt nach Usedom bitte die Br�cken�ffnungszeiten.')" ><img src="bilder/karte-usedom.gif" alt="Ihre Ferienwohnung ist rot markiert" width="100" hspace="5" border=0></a><br>
                                        <br>
                                        <a href="#" onclick="fenster('bilder/karte-bansin.gif','�bersicht Usedom','Haben Sie Bansin einmal erreicht ist es ein Kinderspiel zur Villa Cosima zu finden. Diese Karte soll Ihnen dabei helfen.')"></p>
                                        <img src="bilder/karte-bansin.gif" alt="kompfortale Sitzgelegenheit an gro&szlig;en Fenstern" width="100" hspace="5" border=0 ></a></p>

                                    </div></TD>
                                </TR>
                              </TBODY>
                            </TABLE>

                          </TD>
                        </TR>
                      </TBODY>
                    </TABLE>


 <?php include "inc/footer.inc.php";?>
