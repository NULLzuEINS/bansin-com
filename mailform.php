<?PHP
include "inc/header.inc.php";

echo'
<table border="0" width="100%" >
<tr>
<td>';

if(empty($NachrichtAbsenderName)) {
    // SCHREIBEN
    echo '
    <script type="text/javascript">
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
    <table border="0" width="300" >
    <tr>
    <td>
    Name: </td>
    </tr>
    <tr>
    <td >
    <input type="text" size="52" name="NachrichtAbsenderName" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>
    E-Mail Adresse: </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderEmail" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>Postadresse: </td>
    </tr>
    <tr>
    <td>
    <input type="text" size="52" name="NachrichtAbsenderPostadresse" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td>
    Telefon/Faxnummer: </td>
    </tr>
    <tr>
    <td >
    <input type="text" size="52" name="NachrichtAbsenderTelefon" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td >Betreff: </td>
    </tr>
    <tr>
    <td >
    <input type="text" size="52" name="NachrichtBetreff" style="width:300px;">
    </td>
    </tr>
    <tr>
    <td >Nachricht: </td>
    </tr>
    <tr>
    <td >
    <textarea name="NachrichtInhalt" rows="5" cols="51" wrap="hard" style="width:300px;" ></textarea>
    </td>
    </tr>
    <tr>
    <td align="left" >
    <input type="submit" name=""value="Abschicken" style="width:300px;">
    </td>
    </tr>
    </table>
    </form>';
} else {
    echo'
    <br><br><br><br><center>
    <span class="intern-erlaeuterung">Ein Dankeschön für Ihre Email.<br>
    Die Nachricht wird, wenn nötig, schnellst möglich beantwortet.<br>
    Die Email wurde versandt an: '. $contactEmail .'</b>
    <br><br>
    Mit freundlichen Grüßen <br>
    '. $contactName .'<br>
    '. date("d.m.Y - H:i:s").'Uhr</span></center>';
    
    // EMAILBODY ##############
    $EmailBody = <<<eot
    <html>
    <!--

    Hallo {$contactName}
    Ihr System unterstuetzt keine HTML-Mails!
    Folgende Nachricht wurde Ihnen uebermittelt:

    :::::::::::: {$contactWebsite} ::::::::::::

    Hallo {$contactName},
    Sie haben eine neue Nachricht erhalten.
    Die Nachricht trägt folgenden Inhalt:
    
    NachrichtAbsender: {$NachrichtAbsenderName} {$NachrichtAbsenderEmail}
    NachrichtBetreff: {$NachrichtBetreff}
    
    NachrichtInhalt: {$NachrichtInhalt}


    Mit freundlichen Grüßen
    {$NachrichtAbsenderName}
    {$date}Uhr



    +++ Kontakt +++
    {$contactWebsite} - {$contactTitle}
    {$contactEmail}
    {$NachrichtAbsenderName}
    :::::::::::: {$contactWebsite} ::::::::::::

    -->

    <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
    <html><head><title>{$contactWebsite} - {$contactTitle}</title>
    <meta content="{$contactWebsite} - {$contactTitle}" name="description">
    <meta content="{$contactWebsite} - {$contactTitle}" name="keywords">
    <meta content="index,follow" name="robots">
    <meta content="de" name="Content-Language">
    <meta content="20 days" name="revisit-after">
    <meta content="lademann-behm" name="copyright">
    <meta content="Webmaster" name="webs">
    <meta http-equiv="Content-Type" content="text/html; charset="utf-8"">

    <script language="javascript" type="text/javascript">
    <!--
    self.name = "ferienwohnung";
    //-->
    </script>
    <link href="{$serverAddress}css/styles.css" rel="stylesheet" type="text/css">
    </head>
    <body text="#000000" vlink="#333333" alink="#333333" link="#333333" bgcolor="#f2f2f2" scroll="auto" >
    <div align="center">

    <table width="729" height="560" border="0" cellpadding="0" cellspacing="0" bordercolor="#ffffff" bgcolor="#ffffff">
    <tbody>
    <tr style="background-image:url({$serverAddress}bilder/up.gif)">
    <td width="16" height="10" align="left" valign="top" bgcolor="#3399CC" >&nbsp; </td>
    <td width="686" valign="top" bgcolor="#3399CC" > <div align="center"> <font color="#FFFFFF" size="1">
    {$contactWebsite} - {$contactTitle} </font> </div> </td>
    <td width="27" align="right" valign="top" bgcolor="#3399CC"> <font size="1">&nbsp; </font> </td>
    </tr>
    <tr>
    <td height="106" colspan="3" valign="top" background="{$serverAddress}bilder/banner/{$hour}kopf.jpg">&nbsp; </td>
    </tr>
    <tr>
    <td height="405" colspan="3" valign="top" background="{$serverAddress}bilder/space2.jpg" bgcolor="#ffffff">
    <div align="left"> <br>
    <table cellspacing="0" cellpadding="0" width="99%" align="center" border="0">
    <tbody>
    <tr>
    <td valign="top" width="22%" bgcolor="#ffffff">

    <b>Hallo {$contactName},</b><br><br>
    <font size="1">Sie haben eine neue Nachricht erhalten.
    Die Nachricht trägt folgenden Inhalt:</font><br><br>

    <table border="0" stlye="font-size:9pt;">
    <tr valign="top"><td>NachrichtAbsenderName:</td><td><i>{$NachrichtAbsenderName}</i></td></tr>
    <tr valign="top"><td>NachrichtAbsenderEmail:</td><td><i><a href="mailto:{$NachrichtAbsenderEmail}">{$NachrichtAbsenderEmail}</a></i></td></tr>
    <tr valign="top"><td>NachrichtAbsenderPostadresse:</td><td><i>{$NachrichtAbsenderPostadresse}</i></td></tr>
    <tr valign="top"><td>NachrichtAbsenderTelefon:</td><td><i>{$NachrichtAbsenderTelefon}</i></td></tr>
    <tr valign="top"><td>NachrichtBetreff:</td><td><i>{$NachrichtBetreff}</i></td></tr>
    <tr valign="top"><td>NachrichtInhalt:</td><td><i>{$NachrichtInhalt}</i></td></tr>
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
    </td>
    </tr>
    </tbody>
    </table>
    <br>
    </div> </td>
    </tr>

    <tr>
    <td height="24" colspan="3" background="{$serverAddress}bilder/down.gif">
    <div align="center"> <font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="1">© 2003-{$year} by webs</font> </div> </td>
    </tr>
    </tbody>
    </table>
    </body>
    </html>
    eot;

    // DATEN KOMMEN VON HAUPT-DATEI
    $EmailSubject = 'Betreff: ' . $NachrichtBetreff;
    $EmailToAddress = $contactEmail; // Empfänger der E-Mail
    
    $date = date("d.m.Y - H:i:s");
    $hour = date("H");
    $year = date("Y");
    
    $header = "From: " . $contactWebsite . " <" . $contactEmail . ">\r\n";
    $header .= "Reply-To: " . $NachrichtAbsenderEmail . "\r\n";
    $header .= "Bcc: " . $contactEmailCopy . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $header .= "X-Sender-IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n";
    $header .= "Content-Type: text/html; charset=utf-8\r\n";
    
    mail($EmailToAddress, $EmailSubject, $EmailBody, $header);
}

echo'
</td>
<td valign="top">
<img height="135" alt="" src="bilder/bansin/beach.jpg" vspace="20hspace=20" class="rechtspalte">
</td>
</tr>
</table>';

include "inc/footer.inc.php";
?>
