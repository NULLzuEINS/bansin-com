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
  alert("' . $HinweisOben . 'Bitte geben Sie Ihren Namen ein!' . $HinweisUnten . '");
  document.kontaktforumlar.NachrichtAbsenderName.focus();
  return false;
  }
  if(document.kontaktforumlar.NachrichtAbsenderEmail.value == "") {
  alert("' . $HinweisOben . 'Bitte Sie eine EmailAdresse an, unter der Sie erreichbar sind!' . $HinweisUnten . '");
  document.kontaktforumlar.NachrichtAbsenderEmail.focus();
  return false;
  }
  if(document.kontaktforumlar.NachrichtAbsenderEmail.value != "") {
  if(document.kontaktforumlar.NachrichtAbsenderEmail.value.indexOf(\'@\') == -1) {
  alert("' . $HinweisOben . 'Bei der Emailadresse die Sie eingegeben haben stimmt @was nicht.' . $HinweisUnten . '");
  document.kontaktforumlar.NachrichtAbsenderEmail.focus();
  return false;
  }
  }
  if(document.kontaktforumlar.NachrichtBetreff.value == "")  {
  alert("' . $HinweisOben . 'Bitte geben Sie einen Betreff ein!' . $HinweisUnten . '");
  document.kontaktforumlar.NachrichtBetreff.focus();
  return false;
  }
  if(document.kontaktforumlar.NachrichtInhalt.value == "")  {
  alert("' . $HinweisOben . 'Bitte geben Sie den Inhalt in das groï¿½e Feld ein!' . $HinweisUnten . '");
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
  <span class="intern-erlaeuterung">Ein Dankeschï¿½n fï¿½r Ihre Email.<br>
  Die Nachricht wird, wenn nï¿½tig, schnellst mï¿½glich beantwortet.<br>
  Die Email wurde versandt an: <b>'.$KontaktEmail.'</b>
  <br><br>
  Mit freundlichen Grï¿½ï¿½en <br>
  '.$KontaktName.'<br>
  '. date("d.m.Y - H:i:s").'Uhr</span></center>';
  // EMAILBODY ##############
  $EmailBody = '
  <html>
  <!--

  Hallo ' . $KontaktName . '
  Ihr System unterstuetzt keine HTML-Mails!
  Folgende Nachricht wurde Ihnen uebermittelt:

  :::::::::::: '.$KontaktInternet.'    ::::::::::::

  Hallo '.$KontaktName .',
  Sie haben eine neue Nachricht erhalten.
  Die Nachricht trï¿½gt folgenden Inhalt:
 
  NachrichtAbsender: '.$NachrichtAbsenderName.' '.$NachrichtAbsenderEmail.'
  NachrichtBetreff : '.$NachrichtBetreff.'
  
  NachrichtInhalt: '.$NachrichtInhalt.'


  Mit freundlichen Grï¿½ï¿½en
  '.$KontaktName.'
  '. date("d.m.Y - H:i:s").'Uhr



  +++ Kontakt +++
  '.$KontaktInternet.' - '.$KontaktTitel.'
  '.$KontaktEmail.'
  '.$KontaktName.'
  :::::::::::: '.$KontaktInternet.'   ::::::::::::

  -->

  <!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
  <HTML><HEAD><TITLE>'.$KontaktInternet.' - '.$KontaktTitel.'</TITLE>
  <META content="'.$KontaktInternet.' - '.$KontaktTitel.'" name=description>
  <META content="ferienwohnung,appartement,usedom,bansin, zinnowitz, heeringsdorf, polen, schifffahrt, verleih, ostsee, gï¿½nstig, vermietung, mieten, baden, urlaub, meer, sonne ,lademann ,behm ,villa ,bilder, fotos, kanu, fahrrad, service, gratis, free" name=keywords>
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
  <link href="'.$ServerAdresse.'sonneninselstyle.css" rel="stylesheet" type="text/css">
  </HEAD>
  <BODY text=#000000 vLink=#333333 aLink=#333333 link=#333333 bgColor=#f2f2f2 scroll=auto >
  <DIV align=center>

  <TABLE width=729 height=560 border=0 cellPadding=0 cellSpacing=0 bordercolor="#ffffff" bgcolor="#ffffff">
  <TBODY>
  <TR style="background-image:url('.$ServerAdresse.'bilder/up.gif)">
  <TD width="16" height=10 align="left" vAlign=top bgcolor="#3399CC" >&nbsp;  </TD>
  <TD width="686" vAlign=top bgcolor="#3399CC" >  <div align="center">  <font color="#FFFFFF" size="1">
  '.$KontaktInternet.' -  '.$KontaktTitel.'  </font>  </div>  </TD>
  <TD width="27" align="right" vAlign=top bgcolor="#3399CC">  <font size="1">&nbsp;  </font>  </TD>
  </TR>
  <TR>
  <TD height=106 colspan="3" vAlign=top background="'.$ServerAdresse.'bilder/banner/'. date("H").'kopf.jpg">&nbsp;    </TD>
  </TR>
  <TR>
  <TD height=405 colspan="3" vAlign=top background="'.$ServerAdresse.'bilder/space2.jpg" bgColor=#ffffff>
  <DIV align=left>  <BR>
  <TABLE cellSpacing=0 cellPadding=0 width="99%" align=center border=0>
  <TBODY>
  <TR>
  <TD vAlign=top width="22%" bgColor=#ffffff>

   <b>Hallo ' . $KontaktName . ',</b><br><br>
   <font size="1">Sie haben eine neue Nachricht erhalten.
   Die Nachricht trï¿½gt folgenden Inhalt:</font><br><br>

  <table border="0" stlye="font-size:9pt;">
  <tr valign="top"><td>NachrichtAbsenderName:</td><td><i>'.$NachrichtAbsenderName.'</i></td></tr>
  <tr valign="top"><td>NachrichtAbsenderEmail:</td><td><i><a href="mailto:'.$NachrichtAbsenderEmail.'">'.$NachrichtAbsenderEmail.'</a></i></td></tr>
  <tr valign="top"><td>NachrichtAbsenderPostadresse:</td><td><i>'.$NachrichtAbsenderPostadresse.'</i></td></tr>
  <tr valign="top"><td>NachrichtAbsenderTelefon:</td><td><i>'.$NachrichtAbsenderTelefon.'</i></td></tr>
  <tr valign="top"><td>NachrichtBetreff:</td><td><i>'.$NachrichtBetreff.'</i></td></tr>
  <tr valign="top"><td>NachrichtInhalt:</td><td><i>'.ereg_replace("\r\n|\r|\n", " ",$NachrichtInhalt).'</i></td></tr>
  </table>

  <br><br>
  <font size="1">
  Mit freundlichen Grï¿½ï¿½en<br>
  '.$NachrichtAbsenderName.'<br>
  '. date("d.m.Y - H:i:s").'Uhr<br>
  Das EmailSystem von '.$KontaktInternet.'
  <br>
  <hr size="1" color="darkgray">
  <br>
  <br>

  <b>+++ KontaktDaten +++</b><br>
  '.$KontaktTitel.'<br>
  <a href="'.$KontaktInternet.'">'.$KontaktInternet.'</a><br>
  <a href="mailto:'.$KontaktEmail.'">'.$KontaktEmail.'</a><br>
  '.$KontaktName.'<br>
  </font>
  </TD>
  </TR>
  </TBODY>
  </TABLE>
  <BR>
  </DIV>  </TD>
  </TR>

  <TR>
  <TD height=24 colspan="3" background="'.$ServerAdresse.'bilder/down.gif">
  <DIV align=center>  <FONT face="Verdana, Arial, Helvetica, sans-serif" color=#ffffff size=1>ï¿½ 2003-'. date(y).' by webs</FONT>  </DIV>  </TD>
  </TR>
  </TBODY>
  </TABLE>
  </BODY>
  </HTML>';

  // DATEN KOMMEN VON HAUPT-DATEI
  $EmailSubject   = 'Betreff: '.$NachrichtBetreff;
  $header  = "From:$KontaktInternet<$KontaktEmail>\n";
  $header .= "Reply-To: $NachrichtAbsenderEmail\n";
  $header .= "Bcc: $KontaktEmailKopie\n";
  $header .= "X-Mailer: PHP/" . phpversion(). "\n";
  $header .= "X-Sender-IP: $KontaktEmail\n";
  $header .= "Content-Type: text/html";
  mail($EmailToAddress,$EmailSubject,$EmailBody,$header);
  }//1 ENDE ELSE FORMULAR ODER VERSCHICKEN

echo'
</td>
<td valign=top>
<IMG height=135 alt="" src="bilder/bansin/beach.jpg" vspace=20hspace=20 class="rechtspalte">
</td>
</tr>
</table>';

include "inc/footer.inc.php";?>
