<?PHP
include "inc/header.inc.php";


echo'
<TABLE BORDER=0 WIDTH="100%" >
<TR>
<TD>';


if(empty($NachrichtAbsenderName))
  {
  // SCHREIBEN
  echo '
  <script type="text/javascript">
  <!--
  function chkFormular()
  {
  if(document.kontaktforumlar.NachrichtAbsenderName.value == "")  {
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
  if(document.kontaktforumlar.NachrichtBetreff.value == "")  {
  alert("' . $noticeTop . 'Bitte geben Sie einen Betreff ein!' . $noticeBottom . '");
  document.kontaktforumlar.NachrichtBetreff.focus();
  return false;
  }
  if(document.kontaktforumlar.NachrichtInhalt.value == "")  {
  alert("' . $noticeTop . 'Bitte geben Sie den Inhalt in das große Feld ein!' . $noticeBottom . '");
  document.kontaktforumlar.NachrichtInhalt.focus();
  return false;
  }
  }
  //-->
  </script>
  <form name="kontaktforumlar" method="post" action="'.$PHP_SELF.'" onSubmit="return chkFormular()">
  <TABLE BORDER=0 WIDTH="300" >
  <TR>
  <TD>
  Name:  </TD>
  </TR>
  <TR>
  <TD >
  <INPUT type="text" size="52" name="NachrichtAbsenderName" style="width:300px;">
  </TD>
  </TR>
  <TR>
  <TD>
  E-Mail Adresse:  </TD>
  </TR>
  <TR>
  <TD>
  <INPUT type="text" size="52" name="NachrichtAbsenderEmail" style="width:300px;">
  </TD>
  </TR>
  <TR>
  <TD>Postadresse:   </TD>
  </TR>
  <TR>
  <TD>
  <INPUT type="text" size="52" name="NachrichtAbsenderPostadresse" style="width:300px;">
  </TD>
  </TR>
  <TR>
  <TD>
  Telefon/Faxnummer:   </TD>
  </TR>
  <TR>
  <TD >
  <INPUT type="text" size="52" name="NachrichtAbsenderTelefon" style="width:300px;">
  </TD>
  </TR>

  <TR>
  <TD >Betreff:  </TD>
  </TR>
  <TR>
  <TD >
  <INPUT type="text" size="52" name="NachrichtBetreff" style="width:300px;">
  </TD>
  </TR>
  <TR>
  <TD >Nachricht:  </TD>
  </TR>
  <TR>
  <TD >
  <TEXTAREA name="NachrichtInhalt" rows="5" cols="51" wrap="hard" style="width:300px;" ></TEXTAREA>
  </TD>
  </TR>
  <TR>
  <TD ALIGN=left >
  <INPUT type="submit" name=""value="Abschicken" style="width:300px;">
  </TD>
  </TR>
  </TABLE>
  </form>';
    }
else
  {//1
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
  <META content="{$contactWebsite} - {$contactTitle}" name=keywords>
  <META content=index,follow name=robots>
  <META content=de name=Content-Language>
  <META content="20 days" name=revisit-after>
    <META content="lademann-behm" name=copyright>
  <META content=Webmaster name=webs>
  <META http-equiv=Content-Type content="text/html; charset=utf-8">

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
  $year = date("Y");
  
  $header = "From: " . $contactWebsite . " <" . $contactEmail . ">\r\n";
  $header .= "Reply-To: " . $NachrichtAbsenderEmail . "\r\n";
  $header .= "Bcc: " . $contactEmailCopy . "\r\n";
  $header .= "X-Mailer: PHP/" . phpversion() . "\r\n";
  $header .= "X-Sender-IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n";
  $header .= "Content-Type: text/html; charset=utf-8\r\n";
  
  mail($EmailToAddress, $EmailSubject, $EmailBody, $header);
  }//1 ENDE ELSE FORMULAR ODER VERSCHICKEN

echo'
</td>
<td valign=top>
<IMG height=135 alt="" src="bilder/bansin/beach.jpg" vspace=20hspace=20 class="rechtspalte">
</td>
</tr>
</table>';

include "inc/footer.inc.php";?>
