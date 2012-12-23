 <? include "kopf.inc.php";?>

  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
      <TBODY>
          <TR bgColor=#ffffff>
             <TD vAlign=top width="100%" height=31>
                <FONT face="Verdana, Arial, Helvetica, sans-serif" color=#333333 size=2>
                   <B><span class="ueberschrift">Schiff Ahoi!</span></B>
                </FONT>
             </TD>
             <TD width="29%" height=25 rowSpan=2 align="left" valign="top">
            </TD>
          </TR>
          <TR bgColor=#ffffff>
             <TD vAlign=top width="71%" height=10>
                <hr size="1" color="#f0f0f0" class="trenner">
                <FONT  face="Verdana, Arial, Helvetica, sans-serif" size=2>
                <span class="inhalt">
In Basin und den anderen beiden Kaiserbäder, legen Täglich Schiffe an, die Sie zu Rund und Überfahrten auf der Ostsee einladen. Bei guter Sicht ist das ein wunderbares Erlebnis, welches sie nicht missen sollten.
<br><br>Zur Zeit verkehren folgende Schiffe:<br><br>
<?PHP
              if( (date(n) >= 1 && date(n) <= 9 ) || (date(z) >= $HauptZweiVon && date(z) <= $HauptZweiBis ) || (date(z) >= $HauptDreiVon && date(z) <= $HauptDreiBis ) ||(date(z) >= $HauptVierVon && date(z) <= $HauptVierBis )  )
                   {
                    echo '
                         <table border=0 width=100%>
                    
                            <tr valign=top>
                            <td><b>Ziel</b></td>
                            <td><b>Zeiten</b></td>
                            <td><b>Reisedauer</b></td>
                            <td><b>Fahrpreise</b></td>
                            </tr>

                            <tr valign=top>
                            <td>Swinem&uuml;nde</td>
                            <td width="45">';
                            if (date(H) < 09 || date(H) > 18) echo "09:00";
                            if (date(H) < 12 && date(H) > 9) echo "12:00";
                            if (date(H) < 15 && date(H) > 12) echo "15:00";
                            if (date(H) < 18 && date(H) > 0) echo "18:00";
                            echo'
                            </td>
                            <td>
                             ca. 3 Stunden';
                     if (date(n) != 1 && date(H) == 18 )
                        {
                            echo'
                             Happy-Hour: alle Getr&auml;nke zum 1/2 Preis! Fahrt mit Live-<br>
                             Musik';
                        }
                       echo'
                             </td>
                             
                             <td>
                             3,50 - 2,00 &euro;
                             </td>
                             </tr></table>';
                }

?>
</span></FONT></TD>
<td>               <IMG height=135 alt="" src="bilder/schifffahrt.gif" width=120 vspace=20 hspace=20 class="rechtspalte">
</td>
                                </TR>
                              </TBODY>
                            </TABLE>

<? include "fuss.inc.php";?>
