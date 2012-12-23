<SCRIPT language=javascript type=text/javascript>
<!--


function fenster(datei, titel, beschreibung){
    self.name = "beschreibung";
    info = window.open ('','fenster','WIDTH=600,HEIGHT=450')
             if(info != null){
                 if(info.opener == null){
                      info.opener = self;
                  }
              }
              info.document.clear();
              info.document.open();
              info.document.write("<HTML><HEAD><TITLE>ferienwohnung.de - bansin</TITLE><link href=\"sonneninselstyle.css\" rel=\"stylesheet\" type=\"text/css\"></head>");
              info.document.write("<BODY text=#000000 vLink=#333333 aLink=#333333 link=#333333 bgColor=#f2f2f2 scroll=auto ><center>");
              info.document.write("<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"435\" bgcolor=#ffffff><tr><td width=\"435\" bgcolor=\"#3399cc\" align=\"center\">");
              info.document.write("<font color=\"#ffffff\" size=\"1\" face=\"Verdana,Helveta,Arial\">Ferienappartement in Bansin - " + titel + "</font></td></tr>");
              info.document.write("<tr><td align=\"center\" background=\"bilder/space2.jpg\"><a href=\"javascript:self.close()\"><img src=\"" + datei + "\" alt=\"" + titel + "\" border=\"0\"></a></td></tr>");
              info.document.write("<tr><td align=\"center\" background=\"bilder/space2.jpg\"><font color=\"#000000\" size=\"1\"  face=\"Verdana,Helveta,Arial\">" + beschreibung + "</td></tr>");
              info.document.write("<tr><td width=\"435\" height=\"25\" bgcolor=\"#3399cc\" align=\"center\" background=\"bilder/down.gif\"><font color=\"#ffffff\" size=\"1\" face=\"Verdana,Helveta,Arial\">(c) webs 2003</font>");
              info.document.write("</table>");
              info.document.write("<br><a href=\"javascript:self.close()\">fenster schliessen</a></center></body></HTML>");
              info.document.close();
              info.focus();
              return true;
}



//-->
</SCRIPT>
