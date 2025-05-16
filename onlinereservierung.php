<?php
include "inc/header.inc.php";

echo '<table border="0" width="100%">
<tr>
<td>';

if(empty($NachrichtAbsenderName)) {
    // SCHREIBEN
    echo '<script type="text/javascript">
    <!--
    function chkFormular() {
        if(document.kontaktforumlar.NachrichtAbsenderName.value == "") {
            alert("' . $noticeTop . 'Bitte geben Sie Ihren Namen ein!' . $noticeBottom . '");
            document.kontaktforumlar.NachrichtAbsenderName.focus();
            return false;
        }
        if(document.kontaktforumlar.NachrichtAbsenderEmail.value == "") {
            alert("' . $noticeTop . 'Bitte Sie eine EmailAdresse an, unter der Sie erreichbar sind!' . $noticeBottom . '");
            document.kontaktforumlar.NachrichtAbsenderEmail.focus();
            return false;
        }
        if(document.kontaktforumlar.NachrichtAbsenderEmail.value != "") {
            if(document.kontaktforumlar.NachrichtAbsenderEmail.value.indexOf(\'@\') == -1) {
                alert("' . $noticeTop . 'Bei der Emailadresse die Sie eingegeben haben stimmt @was nicht.' . $noticeBottom . '");
                document.kontaktforumlar.NachrichtAbsenderEmail.focus();
                return false;
            }
        }
        if(document.kontaktforumlar.NachrichtBetreff.value == "") {
            alert("' . $noticeTop . 'Bitte geben Sie einen Betreff ein!' . $noticeBottom . '");
            document.kontaktforumlar.NachrichtBetreff.focus();
            return false;
        }
        if(document.kontaktforumlar.NachrichtInhalt.value == "") {
            alert("' . $noticeTop . 'Bitte geben Sie den Inhalt in das große Feld ein!' . $noticeBottom . '");
            document.kontaktforumlar.NachrichtInhalt.focus();
            return false;
        }
    }
    //-->
    </script>
    <form name="kontaktforumlar" method="post" action="'.$PHP_SELF.'" onsubmit="return chkFormular()">
    <table border="0" width="300">
    <tr>
    <td>
    Zur Kontaktaufnahme benötigen wir zunächst ein paar Daten von Ihnen, um Ihnen Ihre Bestätigung,
    bzw. einen Alternativtermin zuzusenden.<br><br>
    </td>
    </tr>

    <tr>
    <td>
    Name:  </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderName" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>
    E-Mail Adresse:  </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderEmail" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>Postadresse:   </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderPostadresse" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>
    Telefon/Faxnummer:   </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderTelefon" style="width:300px;">
    </td>
    </tr>

    <tr>
    <td>WunschTermin:  </td>
    </tr>
    <tr>
    <td>
    <select name="WunschTag" size="1" style="width:100px;" class="login">';
    if(date('d') == "01") echo'<option value="01" selected>01</option>';
    else echo'<option value="01">01</option>';
    if(date('d') == "02") echo'<option value="02" selected>02</option>';
    else echo'<option value="02">02</option>';
    if(date('d') == "03") echo'<option value="03" selected>03</option>';
    else echo'<option value="03">03</option>';
    if(date('d') == "04") echo'<option value="04" selected>04</option>';
    else echo'<option value="04">04</option>';
    if(date('d') == "05") echo'<option value="05" selected>05</option>';
    else echo'<option value="05">05</option>';
    if(date('d') == "06") echo'<option value="06" selected>06</option>';
    else echo'<option value="06">06</option>';
    if(date('d') == "07") echo'<option value="07" selected>07</option>';
    else echo'<option value="07">07</option>';
    if(date('d') == "08") echo'<option value="08" selected>08</option>';
    else echo'<option value="08">08</option>';
    if(date('d') == "09") echo'<option value="09" selected>09</option>';
    else echo'<option value="09">09</option>';
    if(date('d') == "10") echo'<option value="10" selected>10</option>';
    else echo'<option value="10">10</option>';
    if(date('d') == "11") echo'<option value="11" selected>11</option>';
    else echo'<option value="11">11</option>';
    if(date('d') == "12") echo'<option value="12" selected>12</option>';
    else echo'<option value="12">12</option>';
    if(date('d') == "13") echo'<option value="13" selected>13</option>';
    else echo'<option value="13">13</option>';
    if(date('d') == "14") echo'<option value="14" selected>14</option>';
    else echo'<option value="14">14</option>';
    if(date('d') == "15") echo'<option value="15" selected>15</option>';
    else echo'<option value="15">15</option>';
    if(date('d') == "16") echo'<option value="16" selected>16</option>';
    else echo'<option value="16">16</option>';
    if(date('d') == "17") echo'<option value="17" selected>17</option>';
    else echo'<option value="17">17</option>';
    if(date('d') == "18") echo'<option value="18" selected>18</option>';
    else echo'<option value="18">18</option>';
    if(date('d') == "19") echo'<option value="19" selected>19</option>';
    else echo'<option value="19">19</option>';
    if(date('d') == "20") echo'<option value="20" selected>20</option>';
    else echo'<option value="20">20</option>';
    if(date('d') == "21") echo'<option value="21" selected>21</option>';
    else echo'<option value="21">21</option>';
    if(date('d') == "22") echo'<option value="22" selected>22</option>';
    else echo'<option value="22">22</option>';
    if(date('d') == "23") echo'<option value="23" selected>23</option>';
    else echo'<option value="23">23</option>';
    if(date('d') == "24") echo'<option value="24" selected>24</option>';
    else echo'<option value="24">24</option>';
    if(date('d') == "25") echo'<option value="25" selected>25</option>';
    else echo'<option value="25">25</option>';
    if(date('d') == "26") echo'<option value="26" selected>26</option>';
    else echo'<option value="26">26</option>';
    if(date('d') == "27") echo'<option value="27" selected>27</option>';
    else echo'<option value="27">27</option>';
    if(date('d') == "28") echo'<option value="28" selected>28</option>';
    else echo'<option value="28">28</option>';
    if(date('d') == "29") echo'<option value="29" selected>29</option>';
    else echo'<option value="29">29</option>';
    if(date('d') == "30") echo'<option value="30" selected>30</option>';
    else echo'<option value="30">30</option>';
    if(date('d') == "31") echo'<option value="31" selected>31</option>';
    else echo'<option value="31">31</option>';
    echo'</select>';

    // DATUM MONAT
    echo '<select name="WunschMonat" size="1" style="width:100px;" class="login">';
    if(date('m') == "01") echo'<option value="01" selected>Januar</option>';
    else echo'<option value="01">Januar</option>';
    if(date('m') == "02") echo'<option value="02" selected>Februar</option>';
    else echo'<option value="02">Februar</option>';
    if(date('m') == "03") echo'<option value="03" selected>März</option>';
    else echo'<option value="03">März</option>';
    if(date('m') == "04") echo'<option value="04" selected>April</option>';
    else echo'<option value="04">April</option>';
    if(date('m') == "05") echo'<option value="05" selected>Mai</option>';
    else echo'<option value="05">Mai</option>';
    if(date('m') == "06") echo'<option value="06" selected>Juni</option>';
    else echo'<option value="06">Juni</option>';
    if(date('m') == "07") echo'<option value="07" selected>Juli</option>';
    else echo'<option value="07">Juli</option>';
    if(date('m') == "08") echo'<option value="08" selected>August</option>';
    else echo'<option value="08">August</option>';
    if(date('m') == "09") echo'<option value="09" selected>September</option>';
    else echo'<option value="09">September</option>';
    if(date('m') == "10") echo'<option value="10" selected>Oktober</option>';
    else echo'<option value="10">Oktober</option>';
    if(date('m') == "11") echo'<option value="11" selected>November</option>';
    else echo'<option value="11">November</option>';
    if(date('m') == "12") echo'<option value="12" selected>Dezember</option>';
    else echo'<option value="12">Dezember</option>';
    echo'</select>';

    // DATUM JAHR
    $Jahr = date('Y');
    echo '<select name="WunschJahr" size="1" style="width:99px;" class="login">';
    for($Jahr = date('Y'); $Jahr < date('Y') + 2; $Jahr++) {
        if($Jahr == date('Y')) {
            echo '<option value="'.$Jahr.'" selected>'.$Jahr.'</option>';
        } else {
            echo '<option value="'.$Jahr.'">'.$Jahr.'</option>';
        }
    }
    echo '</select>';
    
    // Dauer
    echo '<select name="WunschDauer" size="1" style="width:99px;" class="login">';
    for($Dauer = 1; $Dauer < 31; $Dauer++) {
        if($Dauer == 7) {
            echo '<option value="'.$Dauer.'" selected>'.$Dauer.'</option>';
        } else {
            echo '<option value="'.$Dauer.'">'.$Dauer.'</option>';
        }
    }
    echo '</select>';

    echo '</td>
    </tr>
    <tr>
    <td>Kommentar:  </td>
    </tr>
    <tr>
    <td>
    <textarea name="NachrichtInhalt" rows="5" cols="51" wrap="hard" style="width:300px;"></textarea>
    </td>
    </tr>
    <tr>
    <td align="left">
    <input type="submit" value="Anfrage abschicken" style="width:300px;">
    </td>
    </tr>
    </table>
    </form>';
} else {
    echo '<br><br><br><br><center>
    <span class="intern-erlaeuterung">Ein Dankeschön für Ihre Vorreservierung.<br>
    Wir werden Ihnen schnellstmöglich Ihre Bestätigung, bzw. einen Alternativetermin zusenden.<br>
    Beachten Sie das dies <i>keine feste Reservierung</i> ist.
    <br>
    Die Reservierung wurde versandt an: <b><?php echo $contactEmail; ?></b>
    <br><br>
    Mit freundlichen Grüßen <br>
    <?php echo $contactName; ?><br>
    <?php echo date("d.m.Y - H:i:s"); ?>Uhr</span></center>';
    $NachrichtBetreff = 'OnlineReservierung';
    // EMAILBODY ##############
    $EmailBody = <<<EOT
    <html>
    <!--

    Hallo {$contactName}
    Ihr System unterstuetzt keine HTML-Mails!
    Folgende Nachricht wurde Ihnen uebermittelt:

    :::::::::::: {$contactWebsite}    ::::::::::::

    Hallo {$contactName},
    Sie haben eine neue Nachricht erhalten.
    Die Nachricht trägt folgenden Inhalt:
   
    NachrichtAbsender: {$NachrichtAbsenderName} {$NachrichtAbsenderEmail}
    NachrichtBetreff: {$NachrichtBetreff}

    WunschDatum: {$WunschTag}.{$WunschMonat}.{$WunschJahr}
    WunschDauer: {$WunschDauer} Tage

    NachrichtInhalt: {$NachrichtInhalt}


    Mit freundlichen Grüßen
    {$NachrichtAbsenderName}
    {$date}Uhr



    +++ Kontakt +++
    {$contactWebsite} - {$contactTitle}
    {$contactEmail}
    {$NachrichtAbsenderName}
    :::::::::::: {$contactWebsite}   ::::::::::::

    -->

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <HTML><HEAD><TITLE>{$contactWebsite} - {$contactTitle}</TITLE>
    <META content="{$contactWebsite} - {$contactTitle}" name=description>
    <META content="{$contactWebsite} - {$contactTitle},ferienwohnung,appartement,usedom,bansin, zinnowitz, heeringsdorf, polen, schifffahrt, verleih, ostsee, günstig, vermietung, mieten, baden, urlaub, meer, sonne ,lademann ,behm ,villa ,bilder, fotos, kanu, fahrrad, service, gratis, free" name=keywords>
    <META content=index,follow name=robots>
    <META content=de name=Content-Language>
    <META content="20 days" name=revisit-after>
      <META content="lademann-behm" name=copyright>
    <META content=Webmaster name=webs>
    <META http-equiv=Content-Type content="text/html; charset=iso-8859-1">

    <SCRIPT language=javascript type=text/javascript>
    <!--
	self.name = "ferienwohnung";
    //-->
    </SCRIPT>
    <link href="{$serverAddress}sonneninselstyle.css" rel="stylesheet" type="text/css">
    </HEAD>
    <BODY text=#000000 vLink=#333333 aLink=#333333 link=#333333 bgColor=#f2f2f2 scroll=auto >
    <DIV align=center>

    <TABLE width=729 height=560 border=0 cellPadding=0 cellSpacing=0 bordercolor="#ffffff" bgcolor="#ffffff">
    <TBODY>
    <TR style="background-image:url({$serverAddress}bilder/up.gif)">
    <TD width="16" height=10 align="left" vAlign=top bgcolor="#3399CC" >&nbsp;  </TD>
    <TD width="686" vAlign=top bgcolor="#3399CC" >  <div align="center">  <font color="#FFFFFF" size="1">
    {$contactWebsite} -  {$contactTitle}  </font>  </div>  </TD>
    <TD width="27" align="right" vAlign=top bgcolor="#3399CC">  <font size="1">&nbsp;  </font>  </TD>
    </TR>
    <TR>
    <TD height=106 colspan="3" vAlign=top background="{$serverAddress}bilder/banner/{$hour}kopf.jpg">&nbsp;    </TD>
    </TR>
    <TR>
    <TD height=405 colspan="3" vAlign=top background="{$serverAddress}bilder/space2.jpg" bgColor=#ffffff>
    <DIV align=left>  <BR>
    <TABLE cellSpacing=0 cellPadding=0 width="99%" align=center border=0>
    <TBODY>
    <TR>
    <TD vAlign=top width="22%" bgColor=#ffffff>

    <b>Hallo {$contactName},</b><br><br>
    <font size="1">Sie haben eine neue Nachricht erhalten.
    Die Nachricht trägt folgenden Inhalt:</font><br><br>

    <table border="0" width="100%">
    <tr valign="top">
    <td>WunschDatum:</td>
    <td><i>{$WunschTag}.{$WunschMonat}.{$WunschJahr}</i></td>
    </tr>
    <tr valign="top">
    <td>WunschDauer:</td>
    <td><i>{$WunschDauer} Tage</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtAbsenderName:</td>
    <td><i>{$NachrichtAbsenderName}</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtAbsenderEmail:</td>
    <td><i>{$NachrichtAbsenderEmail}</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtAbsenderPostadresse:</td>
    <td><i>{$NachrichtAbsenderPostadresse}</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtAbsenderTelefon:</td>
    <td><i>{$NachrichtAbsenderTelefon}</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtBetreff:</td>
    <td><i>{$NachrichtBetreff}</i></td>
    </tr>
    <tr valign="top">
    <td>NachrichtInhalt:</td>
    <td><i>{$NachrichtInhalt}</i></td>
    </tr>
    </table>

    <br><br>
    <font size="1">
    Mit freundlichen Grüßen<br>
    {$NachrichtAbsenderName}
    {$date}Uhr<br>
    Das EmailSystem von {$contactWebsite}
    <br>
    <hr size="1" color="darkgray">
    <br>
    <br>

    <b>+++ KontaktDaten +++</b><br>
    {$contactTitle}<br>
    <a href="{$contactWebsite}">{$contactWebsite}</a><br>
    <a href="mailto:{$contactEmail}">{$contactEmail}</a><br>
    {$NachrichtAbsenderName}
    </font>
    </TD>
    </TR>
    </TBODY>
    </TABLE>
    <BR>
    </DIV>  </TD>
    </TR>

    <TR>
    <TD height=24 colspan="3" background="{$serverAddress}bilder/down.gif">
    <DIV align=center>  <FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=1>© 2003-{$year} by webs</FONT>  </DIV>  </TD>
    </TR>
    </TBODY>
    </TABLE>
    </BODY>
    </HTML>
EOT;

    // DATEN KOMMEN VON HAUPT-DATEI
    $EmailSubject = 'Betreff: ' . $NachrichtBetreff;
    $EmailToAddress = $contactEmail; // Empfänger der E-Mail
    
    $date = date("d.m.Y - H:i:s");
    $hour = date("H");
    $year = date('y');
    
    $header = "From: " . $contactWebsite . " <" . $contactEmail . ">\r\n";
    $header .= "Reply-To: " . $NachrichtAbsenderEmail . "\r\n";
    $header .= "Bcc: " . $contactEmailCopy . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "X-Sender-IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $header .= "Content-Type: text/html; charset=iso-8859-1\r\n";
    
    mail($EmailToAddress, $EmailSubject, $EmailBody, $header);
}

echo '</td>
<td valign="top">
<img height="135" alt="" src="bilder/bansin/beach.jpg" vspace="20" hspace="20" class="rechtspalte">
</td>
</tr>
</table>';

include "inc/footer.inc.php";
?>
