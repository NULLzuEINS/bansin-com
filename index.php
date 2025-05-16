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
        </td>
    </tr>
    <tr bgcolor="#ffffff">
        <td valign="top" width="71%" height="10">
            <hr size="1" color="#f0f0f0" class="trenner">
            <font face="Verdana, Arial, Helvetica, sans-serif" size="2"> <span class="inhalt">
        Hier k&ouml;nnen Sie in gem&uuml;tlicher Atmosph&auml;re an meeres-frischer 
        Luft gro&szlig;artig entspannen und genie&szlig;en. In einer gem&uuml;tlichen, 
        gro&szlig;z&uuml;gig ausgestatteten Ferienwohnung mit allem drum und dran. 
        Die Villa Cosima in Bansin. &Uuml;berzeugen Sie sich selbst und wagen 
        Sie einen kleinen Rundgang auf unseren Seiten. </span></font></td>
    </tr>

    <tr>
        <td valign="top" bgcolor="#ffffff"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <span
                        class="inhalt">
        <?php
        if (date("L") == 0) {
            $mainSeasonOneFrom = 170;
            $mainSeasonOneTo = 243;
            $mainSeasonTwoFrom = 353;
            $mainSeasonTwoTo = 365;
            $mainSeasonThreeFrom = 1;
            $mainSeasonThreeTo = 3;

            $midSeasonOneFrom = 107;
            $midSeasonOneTo = 170;
            $midSeasonTwoFrom = 244;
            $midSeasonTwoTo = 277;

            $offSeasonOneFrom = 15;
            $offSeasonOneTo = 106;
            $offSeasonTwoFrom = 278;
            $offSeasonTwoTo = 353;

        } else {
            $mainSeasonOneFrom = 170 + 1;
            $mainSeasonOneTo = 243 + 1;
            $mainSeasonTwoFrom = 353 + 1;
            $mainSeasonTwoTo = 365 + 1;
            $mainSeasonThreeFrom = 1;
            $mainSeasonThreeTo = 3;

            $midSeasonOneFrom = 107 + 1;
            $midSeasonOneTo = 170 + 1;
            $midSeasonTwoFrom = 244 + 1;
            $midSeasonTwoTo = 277 + 1;

            $offSeasonOneFrom = 15;
            $offSeasonOneTo = 106 + 1;
            $offSeasonTwoFrom = 278 + 1;
            $offSeasonTwoTo = 353 + 1;
        }

        if ((date("z") >= $mainSeasonOneFrom && date("z") <= $mainSeasonOneTo) || (date("z") >= $mainSeasonTwoFrom && date("z") <= $mainSeasonTwoTo) || (date("z") >= $mainSeasonThreeFrom && date("z") <= $mainSeasonThreeTo)) {
            echo "Zur Zeit ist Hauptsaison. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur 75 &euro; am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
        }
        if ((date("z") >= $midSeasonOneFrom && date("z") <= $midSeasonOneTo) || (date("z") >= $midSeasonTwoFrom && date("z") <= $midSeasonTwoTo)) {
            echo "Zur Zeit ist Zwischensaison. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur <b>55 &euro;</b> am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
        }
        if ((date("z") >= $offSeasonOneFrom && date("z") <= $offSeasonOneTo) || (date("z") >= $offSeasonTwoFrom && date("z") <= $offSeasonTwoTo)) {
            echo "Zur Zeit haben wir die Vorsaison. Das
                                            heisst f&uuml;r sie, dass sie ein
                                            schn&auml;pchen machen k&ouml;nnen.
                                            Denn anl&auml;sslicher der etwas frischeren
                                            Jahreszeit haben wir die Preise f&uuml;r
                                            sie gesenkt. Sie k&ouml;nnen sich bei uns in der Villa Cosima
                          f&uuml;r nur <b>41 &euro;</b> am Tag einmieten und wundervolle Momente in Bansin und auf Usedom erleben.";
        }

        ?>
            </font></td>
        <td valign="top" width="29%" height="128">
        </td>
    </tr>

    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>
