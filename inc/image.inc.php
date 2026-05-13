<script>
function fenster(datei, titel, beschreibung) {
    const info = window.open('', 'fenster', 'width=600,height=450');
    
    if (!info) return false;
    
    info.opener = self;
    
    const html = `
        <html>
            <head>
                <title>ferienwohnung.de - bansin</title>
                <link href="../css/styles.css" rel="stylesheet" type="text/css">
            </head>
            <body text="#000000" vlink="#333333" alink="#333333" link="#333333" bgcolor="#f2f2f2" scroll="auto">
                <center>
                    <table border="0" cellpadding="0" cellspacing="0" width="435" bgcolor="#ffffff">
                        <tr>
                            <td width="435" bgcolor="#3399cc" align="center">
                                <span class="text-white text-xs">
                                    Ferienappartement in Bansin - ${titel}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" background="../bilder/space2.jpg">
                                <a href="javascript:self.close()">
                                    <img src="${datei}" alt="${titel}" border="0">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" background="../bilder/space2.jpg">
                                <span class="text-xs">
                                    ${beschreibung}
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td width="435" height="25" bgcolor="#3399cc" align="center" background="../bilder/down.gif">
                                <span class="text-white text-xs">
                                    (c) webs 2003
                                </span>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <a href="javascript:self.close()">fenster schliessen</a>
                </center>
            </body>
        </html>
    `;
    
    info.document.write(html);
    info.document.close();
    info.focus();
    return true;
}
</script>
