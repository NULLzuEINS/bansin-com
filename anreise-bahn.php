 <? include "kopf.inc.php";?>

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
<br>                          <span class="inhalt">
     <img src="bilder/diebahn.jpg" alt="Ihre Ferienwohnung ist rot markiert" width="150" height=100 hspace="5" border=0 align=left>
     Mit der Bahn kommen Sie stressfrei zu Ihrem Erholungsurlaub. Geben Sie hier Ihren "Heimathafen" ein und schon kann es losgehen; auf die sonnigste Insel Deutschlands.

     </span>
     <br><br>
             
             <br><br><br><br><br><br>
             
<!-- #################     DIE BAHN ############ //-->

      <table border="0" cellpadding="0" cellspacing="0" width="435">
      <tr>
      <td width="435" bgcolor="#3399cc" class="headlines"><font color="#ffffff">Route berechnen</font></td>
      </tr>
      </table>
<table width="435" border="0" cellspacing="0" cellpadding="0" align=left bgcolor="#f0f0f0">
	<tr>
	<form action="http://reiseauskunft.bahn.de/bin/query.exe/dn?L=dbag&datesel=custom" method="post" name="formular" target="bahn">
        <td >
			<table width="150" border="0" cellspacing="0" cellpadding="2"  align=left>
				<tr>
					<td class="erlaeuterung">&nbsp;von:</td>
					<td align="right" colspan="2">
							<input style="width:100;font:11px" type="text" name="S" size="10 ">&nbsp;
					</td>
				</tr>
				<tr>
					<td class="erlaeuterung">&nbsp;nach:</td>
					<td align="right" colspan="2">
						<input style="width:100;font:11px"value="Bansin Seebad" type="text" name="Z" size="10" readonly>&nbsp;
					</td>
				</tr>
          </table>
          </td>
          <td>
          <table>
    			<tr>
					<td class="erlaeuterung">&nbsp;Datum:</td>
					<td colspan="2"><input style="width:100;font:11px" type="text" name="date" size="10">&nbsp;</td>
				</tr>
				<tr>
					<td class="erlaeuterung">&nbsp;Uhrzeit:</td>
					<td><input style="width:50;font:11px" type="text" name="time" size="5"></td>
               </tr>
         </table>
          </td>
          <td>

    	<table width="9" border="0" cellspacing="0" cellpadding="0">
				<tr>
				 <td width="19"><input style="background-color:#f0f0f0;" type="radio" name="timesel" value="depart" checked></td>
				 <td class="erlaeuterung" width="43">Abfahrt</td>
				</tr>
			    <tr>
				 <td width="19"><input style="background-color:#f0f0f0;" type="radio" name="timesel" value="arrive" ></td>
				 <td class="erlaeuterung" width="43">Ankunft</td>
				</tr>
		</table>
          </td>
</tr>
          </td>
          <td>
          </td>
          <td>

          <td>

		<input type="submit" name="submitButtonName" value="Suchen" border="0" style="font-family:verdana,helvetica,arial,sans-serif;font-size:8pt;color: #ffffff; width:65px;border-color:#ffffff;background-color:#3399cc;border-width:1;border-style:solid">&nbsp;</td>
		</td>
	</tr>
</table>
<script language="javascript">
if (document.forms.hafasziel){document.forms.formular.Z.value = document.forms.hafasziel.zielbahnhof.value;}var jetzt = new Date();if (jetzt.getMinutes() > 9) {document.formular.time.value = (jetzt.getHours() + ":" + jetzt.getMinutes());}else {document.formular.time.value = (jetzt.getHours() + ":0" + jetzt.getMinutes());}var monat = jetzt.getMonth();monat++;var jahr = jetzt.getYear();if(jahr < 200) jahr+=1900;if(jahr < 1999) jahr+=100;if (monat > 9) {document.formular.date.value = (jetzt.getDate() + "." + monat + "." + jahr);}else {document.formular.date.value = (jetzt.getDate() + ".0" + monat + "." + jahr);}
</script>


             
             
        </TD>
                                  <TD vAlign=top width="45%"><div align="right">
                                      <p></a><br>

                                    </div></TD>
                                </TR>
                              </TBODY>
                            </TABLE>
                            
                          </TD>
                        </TR>
                      </TBODY>
                    </TABLE>
                    
                    
<? include "fuss.inc.php";?>
