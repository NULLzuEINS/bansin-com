<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Anreise - Villa Cosima</title>
</head>
<body>
<?php include "inc/header.inc.php"; ?>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
    <tbody>
        <tr>
            <td align="left" valign="top">
                <table cellspacing="0" cellpadding="0" width="100%" border="0">
                    <tbody>
                        <tr bgcolor="#ffffff">
                            <td height="41" colspan="2" valign="top">
                                <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><strong>Anreisen mit System!</strong></font>
                            </td>
                        </tr>
                        <tr bgcolor="#ffffff">
                            <td valign="top" width="55%" height="260">
                                Mit dem Auto..
                                <table border="0" cellpadding="0" cellspacing="0" width="435">
                                    <tr>
                                        <td height="2" colspan="9" valign="top"><img src="http://img.web.de/v/p.gif" border="0" width="435" height="2" alt=""></td>
                                    </tr>
                                    <tr bgcolor="#EBECEE">
                                        <td height="11" colspan="9" valign="top"><img src="http://img.web.de/v/p.gif" border="0" width="435" height="11" alt=""></td>
                                    </tr>
                                    <tr bgcolor="#EBECEE">
                                        <td width="10" rowspan="4">
                                            <form name="webderoute2" method="post" target="webde" action="http://portale.web.de/Auto/Routenplaner/">
                                                <img src="http://img.web.de/v/p.gif" border="0" width="10" height="1" alt="">
                                        </td>
                                        <td width="200" colspan="3">Start</td>
                                        <td width="15" rowspan="4"><img src="http://img.web.de/v/p.gif" border="0" width="15" height="1" alt=""></td>
                                        <td width="200" colspan="3">Ziel</td>
                                        <td width="10" rowspan="4"><img src="http://img.web.de/v/p.gif" border="0" width="10" height="1" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#0176E3" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
                                        <td bgcolor="#FFC800" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#0176E3" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
                                        <td width="198" bgcolor="#FFFFFF" align="center" valign="middle">
                                            <table border="0" cellpadding="2" cellspacing="2" width="198">
                                                <tr>
                                                    <td rowspan="3" width="1"></td>
                                                    <td colspan="2" width="180">
                                                        <font face="Verdana, Arial, Helvetica" size="3">
                                                            <input type="text" name="fromstreet" value="Straße" size="12" style="width: 178px" tabindex="1" onfocus="if (this.value == 'Straße') this.value = '';">
                                                        </font>
                                                    </td>
                                                    <td rowspan="3" width="1"></td>
                                                </tr>
                                                <tr>
                                                    <td width="58">
                                                        <font face="Verdana, Arial, Helvetica" size="3">
                                                            <input type="text" name="fromplz" value="PLZ" size="3" style="width: 50px" maxlength="10" tabindex="2" onfocus="if (this.value == 'PLZ') this.value = '';">
                                                        </font>
                                                    </td>
                                                    <td width="118">
                                                        <font face="Verdana, Arial, Helvetica" size="3">
                                                            <input type="text" name="fromcity" value="Ort" size="8" style="width: 120px" tabindex="3" onfocus="if (this.value == 'Ort') this.value = '';">
                                                        </font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <font face="Verdana, Arial, Helvetica" size="2">
                                                            <select name="fromcountry" tabindex="4" style="width: 178px">
                                                                <option value="---">Bitte wählen...</option>
                                                                <option value="BEL">Belgien</option>
                                                                <option value="DNK">Dänemark</option>
                                                                <option value="DEU">Deutschland</option>
                                                                <option value="FRA">Frankreich</option>
                                                                <option value="GBR">Großbritannien</option>
                                                                <option value="ITA">Italien</option>
                                                                <option value="LIE">Liechtenstein</option>
                                                                <option value="LUX">Luxemburg</option>
                                                                <option value="NLD">Niederlande</option>
                                                                <option value="NOR">Norwegen</option>
                                                                <option value="AUT">Österreich</option>
                                                                <option value="PRT">Portugal</option>
                                                                <option value="SWE">Schweden</option>
                                                                <option value="CHE">Schweiz</option>
                                                                <option value="ESP">Spanien</option>
                                                            </select>
                                                        </font>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td bgcolor="#0176E3" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
                                        <td bgcolor="#FFC800" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
                                        <td align="center" valign="middle" bgcolor="#FFFFFF" width="198">
                                            <table border="0" cellpadding="2" cellspacing="2" width="198">
                                                <tr>
                                                    <td rowspan="3" width="1"></td>
                                                    <td>
                                                        <font face="Verdana, Arial, Helvetica" size="2"><b>Villa Cosima</b></font>
                                                    </td>
                                                    <td rowspan="3" width="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <font face="Verdana, Arial, Helvetica" size="2">
                                                            <input type="hidden" name="tostreet" value="Schulstraße 7">Schulstraße 7
                                                        </font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <font face="Verdana, Arial, Helvetica" size="2">
                                                            <input type="hidden" name="tocountry" value="DEU">
                                                            <input type="hidden" name="toplz" value="17429">
                                                            <input type="hidden" name="tocity" value="Seebad Bansin">D - 17429 Seebad Bansin
                                                        </font>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td bgcolor="#FFC800" width="1"><img src="http://img.web.de/v/p.gif" border="0" width="1" height="1" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#0176E3" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
                                        <td bgcolor="#FFC800" colspan="3"><img src="http://img.web.de/v/p.gif" border="0" width="200" height="1" alt=""></td>
                                    </tr>
                                    <tr bgcolor="#EBECEE">
                                        <td height="50" colspan="9" align="right" valign="middle">
                                            <input type="submit" value="Berechnen" style="font-family:verdana,helvetica,arial,sans-serif;font-size:8pt;color: #ffffff; width:65px;border-color:#ffffff;background-color:#3399cc;border-width:1;border-style:solid">&nbsp;&nbsp;&nbsp;
                                        </td>
                                    </tr>
                                    <tr>
                                        <td height="10" colspan="9">
                                            </form><img src="http://img.web.de/v/p.gif" width="1" height="10" border="0" alt=""></td>
                                    </tr>
                                </table>

                                <br><br>
                                oder mit der Bahn.. <br>

                                <table width="435" border="0" cellspacing="0" cellpadding="0" align="left" bgcolor="#f0f0f0">
                                    <tr>
                                        <td>
                                            <form action="http://reiseauskunft.bahn.de/bin/query.exe/dn?l=dbag&datesel=custom" method="post" name="formular" target="bahn">
                                                <table width="150" border="0" cellspacing="0" cellpadding="2" align="left">
                                                    <tr>
                                                        <td class="tabklein">&nbsp;von:</td>
                                                        <td align="right" colspan="2">
                                                            <input style="width:100;font:11px" type="text" name="S" size="10">&nbsp;
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabklein">&nbsp;nach:</td>
                                                        <td align="right" colspan="2">
                                                            <input style="width:100;font:11px" value="Bansin Seebad" type="text" name="Z" size="10">&nbsp;
                                                        </td>
                                                    </tr>
                                                </table>
                                                <table>
                                                    <tr>
                                                        <td class="tabklein">&nbsp;Datum:</td>
                                                        <td colspan="2"><input style="width:100;font:11px" type="text" name="date" size="10">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="tabklein">&nbsp;Uhrzeit:</td>
                                                        <td><input style="width:50;font:11px" type="text" name="time" size="5"></td>
                                                    </tr>
                                                </table>
                                                <table width="9" border="0" cellspacing="0" cellpadding="0">
                                                    <tr>
                                                        <td width="19"><input style="background-color:#f0f0f0;" type="radio" name="timesel" value="depart" checked></td>
                                                        <td class="tabklein" width="43">Abfahrt</td>
                                                    </tr>
                                                    <tr>
                                                        <td width="19"><input style="background-color:#f0f0f0;" type="radio" name="timesel" value="arrive"></td>
                                                        <td class="tabklein" width="43">Ankunft</td>
                                                    </tr>
                                                </table>
                                                <input type="submit" name="submitButtonName" value="Suchen" style="font-family:verdana,helvetica,arial,sans-serif;font-size:8pt;color: #ffffff; width:65px;border-color:#ffffff;background-color:#3399cc;border-width:1;border-style:solid">&nbsp;
                                            </form>
                                        </td>
                                    </tr>
                                </table>

                                <script>
                                    if (document.forms.hafasziel) {
                                        document.forms.formular.Z.value = document.forms.hafasziel.zielbahnhof.value;
                                    }
                                    var jetzt = new Date();
                                    if (jetzt.getMinutes() > 9) {
                                        document.formular.time.value = (jetzt.getHours() + ":" + jetzt.getMinutes());
                                    } else {
                                        document.formular.time.value = (jetzt.getHours() + ":0" + jetzt.getMinutes());
                                    }
                                    var monat = jetzt.getMonth();
                                    monat++;
                                    var jahr = jetzt.getYear();
                                    if (jahr < 200) jahr += 1900;
                                    if (jahr < 1999) jahr += 100;
                                    if (monat > 9) {
                                        document.formular.date.value = (jetzt.getDate() + "." + monat + "." + jahr);
                                    } else {
                                        document.formular.date.value = (jetzt.getDate() + ".0" + monat + "." + jahr);
                                    }
                                </script>
                            </td>
                            <td valign="top" width="45%">
                                <div align="right">
                                    <p>
                                        <a href="karte-usedom.htm"><img src="bilder/karte-usedom.gif" alt="Ihre Ferienwohnung ist rot markiert" width="100" hspace="20" border="0"></a><br>
                                        <br>
                                        <a href="karte-bansin.htm"><img src="bilder/karte-bansin.gif" alt="komfortable Sitzgelegenheit an großen Fenstern" width="100" hspace="20" border="0"></a>
                                    </p>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </tbody>
</table>

<?php include "inc/footer.inc.php"; ?>
</body>
</html>