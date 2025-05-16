<?php include "inc/header.inc.php"; ?>

<table cellspacing="0" cellpadding="0" width="100%" border="0">
  <tbody>
    <tr>
      <td align="left" valign="top">
        <table cellspacing="0" cellpadding="0" width="100%" border="0">
          <tbody>
            <tr bgcolor="#ffffff">
              <td height="41" colspan="2" valign="top">
                <font face="Verdana, Arial, Helvetica!, sans-serif" size="2">
                  <b><span class="ueberschrift">Anreisen mit System!</span></b>
                </font>
              </td>
            </tr>
            <tr bgcolor="#ffffff">
              <td valign="top" width="55%" height="260">
                <hr size="1" color="#f0f0f0" class="trenner">
                <table border="0" width="435" height="12" bgcolor="#3399cc" cellpadding="0" cellspacing="0">
                  <tr align="center">
                    <td height="10"><a href="anreise-auto.php">
                        <font color="#ffffff">Auto</font>
                      </a></td>
                    <td height="10"><a href="anreise-bahn.php">
                        <font color="#ffffff">Bahn</font>
                      </a></td>
                    <td height="10"><a href="anreise-bus.php">
                        <font color="#ffffff">Bus</font>
                      </a></td>
                    <td height="10"><a href="anreise-flugzeug.php">
                        <font color="#ffffff">Flugzeug</font>
                      </a></td>
                    <td height="10"><a href="anreise-schiff.php">
                        <font color="#ffffff">Schiff</font>
                      </a></td>
                  </tr>
                </table>
                <br> <span class="inhalt">
                  <img src="bilder/diebahn.jpg" alt="Ihre Ferienwohnung ist rot markiert" width="150" height="100" hspace="5" border="0" align="left">
                  Mit der Bahn kommen Sie stressfrei zu Ihrem Erholungsurlaub. Geben Sie hier Ihren "Heimathafen" ein und schon kann es losgehen; auf die sonnigste Insel Deutschlands.
                </span>
                <br><br>
              </td>
              <td valign="top" width="45%">
                <div align="right">
                  <p></p>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </td>
    </tr>
  </tbody>
</table>

<script>
  // Set target station if available
  if (document.forms.hafasziel) {
    document.forms.formular.Z.value = document.forms.hafasziel.zielbahnhof.value;
  }

  // Set current time
  const now = new Date();
  const hours = now.getHours();
  const minutes = now.getMinutes().toString().padStart(2, '0');
  document.formular.time.value = `${hours}:${minutes}`;

  // Set current date
  const day = now.getDate();
  const month = (now.getMonth() + 1).toString().padStart(2, '0');
  const year = now.getFullYear();
  document.formular.date.value = `${day}.${month}.${year}`;
</script>

<?php include "inc/footer.inc.php"; ?>