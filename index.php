 <? include "kopf.inc.php";?>

  <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
      <TBODY>
          <TR bgColor=#ffffff>
             <TD vAlign=top width="71%" height=31>
                <FONT face="Verdana, Arial, Helvetica, sans-serif" color=#333333 size=2>
                   <B><span class="ueberschrift">Herzlich Willkommen in den Ferien!</span></B>
                </FONT>
             </TD>
             <TD width="29%" height=25 rowSpan=2 align="left" valign="top">
               <br><br><br><IMG height=135 alt="" src="bilder/bansin/beach.jpg"   hspace=20 class="rechtspalte">
            </TD> <!-- <IMG height=135 alt="" src="bilder/sonnenstuhl.gif" width=120 vspace=20 hspace=20 class="rechtspalte"> //-->
          </TR>
          <TR bgColor=#ffffff>
             <TD vAlign=top width="71%" height=10>
                <hr size="1" color="#f0f0f0" class="trenner">
        <FONT  face="Verdana, Arial, Helvetica, sans-serif" size=2> <span class="inhalt"> 
        Hier k&ouml;nnen Sie in gem&uuml;tlicher Atmosph&auml;re an meeres-frischer 
        Luft gro&szlig;artig entspannen und genie&szlig;en. In einer gem&uuml;tlichen, 
        gro&szlig;z&uuml;gig ausgestatteten Ferienwohnung mit allem drum und dran. 
        Die Villa Cosima in Bansin. &Uuml;berzeugen Sie sich selbst und wagen 
        Sie einen kleinen Rundgang auf unseren Seiten. </span></FONT> </TD>
           </TR>

           <TR>
             
      <TD vAlign=top bgColor=#ffffff> <font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <span class="inhalt"> 
        <?php

              if( date(L) == 0)
                  {
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

                  }
               else
                  {
                      $HauptEinsVon = 170+1;
                      $HauptEinsBis = 243+1;
                      $HauptZweiVon = 353+1;
                      $HauptZweiBis = 365+1;
                      $HauptDreiVon = 1;
                      $HauptDreiBis = 3;


                      $ZwischenEinsVon = 107+1;
                      $ZwischenEinsBis = 170+1;
                      $ZwischenZweiVon = 244+1;
                      $ZwischenzweiBis = 277+1;

                      $VorEinsVon = 15;
                      $VorEinsBis = 106+1;
                      $VorZweiVon = 278+1;
                      $VorZweiBis = 353+1;
                  }

              if( (date(z) >= $HauptEinsVon && date(z) <= $HauptEinsBis ) || (date(z) >= $HauptZweiVon && date(z) <= $HauptZweiBis ) || (date(z) >= $HauptDreiVon && date(z) <= $HauptDreiBis ))
                   {
                    echo "Zur Zeit ist Hauptsaison. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur 75 &euro; am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
                }
              if( (date(z) >= $ZwischenEinsVon && date(z) <= $ZwischenEinsBis ) || (date(z) >= $ZwischenZweiVon && date(z) <= $ZwischenZweiBis ) )
                   {
                    echo "Zur Zeit ist Zwischensaison. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur <b>55 &euro;</b> am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
                }
              if( (date(z) >= $VorEinsVon && date(z) <= $VorEinsBis ) || (date(z) >= $VorZweiVon && date(z) <= $VorZweiBis ) )
                   {
                    echo "Zur Zeit haben wir die Vorsaison. Das
                                            heisst f&uuml;r sie, dass sie ein
                                            schn&auml;pchen machen k&ouml;nnen.
                                            Denn anl&auml;sslicher der etwas frischeren
                                            Jahreszeit haben wir die Preise f&uuml;r
                                            sie gesenkt. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur <b>41 &euro;</b> am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
                }
              ?>
</font></TD>
             <TD vAlign=top width="29%" height=128>
             </TD>
                </TR>

                              </TBODY>
                            </TABLE>

 <? include "fuss.inc.php";?>
