<?php include "inc/header.inc.php";?>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr bgcolor="#ffffff">
            <td valign="top" width="100%" height="31">
                <font face="Verdana, Arial, Helvetica, sans-serif" color="#333333" size="2">
                    <b><span class="ueberschrift">Schiff Ahoi!</span></b>
                </font>
            </td>
            <td width="29%" height="25" rowspan="2" align="left" valign="top">
            </td>
        </tr>
        <tr bgcolor="#ffffff">
            <td valign="top" width="71%" height="10">
                <hr size="1" color="#f0f0f0" class="trenner">
                <font face="Verdana, Arial, Helvetica, sans-serif" size="2">
                <span class="inhalt">
In Basin und den anderen beiden Kaiserbï¿½der, legen Tï¿½glich Schiffe an, die Sie zu Rund und ï¿½berfahrten auf der Ostsee einladen. Bei guter Sicht ist das ein wunderbares Erlebnis, welches sie nicht missen sollten.
<br><br>Zur Zeit verkehren folgende Schiffe:<br><br>
<?php
// Define season periods
$seasonTwoFrom = 1;  // Example values - please adjust
$seasonTwoTo = 30;
$seasonThreeFrom = 1;
$seasonThreeTo = 30;
$seasonFourFrom = 1;
$seasonFourTo = 30;

if ((date('n') >= 1 && date('n') <= 9) || 
    (date('z') >= $seasonTwoFrom && date('z') <= $seasonTwoTo) || 
    (date('z') >= $seasonThreeFrom && date('z') <= $seasonThreeTo) || 
    (date('z') >= $seasonFourFrom && date('z') <= $seasonFourTo))
{
    echo '
    <table border="0" width="100%">
        <tr valign="top">
            <td><b>Ziel</b></td>
            <td><b>Zeiten</b></td>
            <td><b>Reisedauer</b></td>
            <td><b>Fahrpreise</b></td>
        </tr>

        <tr valign="top">
            <td>Swinem&uuml;nde</td>
            <td width="45">';
            $currentHour = (int)date('H');
            if ($currentHour < 9 || $currentHour > 18) echo "09:00";
            if ($currentHour < 12 && $currentHour > 9) echo "12:00";
            if ($currentHour < 15 && $currentHour > 12) echo "15:00";
            if ($currentHour < 18 && $currentHour > 0) echo "18:00";
            echo '</td>
            <td>
                ca. 3 Stunden';
            if (date('n') != 1 && $currentHour == 18) {
                echo '
                Happy-Hour: alle Getr&auml;nke zum 1/2 Preis! Fahrt mit Live-<br>
                Musik';
            }
            echo '
            </td>
            <td>
                3,50 - 2,00 &euro;
            </td>
        </tr>
    </table>';
}
?>
</span></font></td>
<td>
    <img height="135" alt="" src="bilder/schifffahrt.gif" width="120" vspace="20" hspace="20" class="rechtspalte">
</td>
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php";?>
