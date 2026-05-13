<?php
include "config.inc.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=" UTF-8"">
    <title><?= $contactWebsite ?> - <?= $contactTitle ?></title>
    <meta content="<?= $contactWebsite ?> - <?= $contactTitle ?>" name="description">
    <meta content="ferienwohnung,appartement,usedom,bansin, zinnowitz, heeringsdorf, polen, schifffahrt, verleih, ostsee, vermietung, mieten, baden, urlaub, meer, sonne ,lademann ,behm ,villa ,bilder, fotos, kanu, fahrrad, service, gratis, free"
        name="keywords">
    <meta content="index,follow" name="robots">
    <meta content="de" name="Content-Language">
    <meta content="20 days" name="revisit-after">
    <meta content="lademann-behm" name="copyright">
    <script language="javascript" type="text/javascript">
        self.name = "ferienwohnung";
    </script>
    <link href="<?= $serverAddress ?>css/styles.css?v=<?= filemtime($_SERVER['DOCUMENT_ROOT'] . '/css/styles.css') ?>" rel="stylesheet" type="text/css">
</head>

<body text="#000000" vlink="#333333" alink="#333333" link="#333333" bgcolor="#f2f2f2" scroll="auto">
    <div class="layout-center">
        <div class="layout-wrapper">
            <div class="layout-topbar">
                <div class="layout-topbar-spacer-l">&nbsp;</div>
                <div class="layout-topbar-title">
                    <font color="#ffffff" size="1">
                        <?= $contactTitle ?>
                    </font>
                </div>
                <div class="layout-topbar-spacer-r"><font size="1">&nbsp;</font></div>
            </div>
            <div class="layout-banner" style="background-image:url(bilder/banner/<?= date("H") ?>kopf.jpg)">&nbsp;</div>
            <div class="layout-content-area">
                <div align="left"><br>
                    <div class="layout-row">
                        <div class="layout-col-nav">
                            <div class="nav-block">
                                <div class="nav-block-header">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="2">&nbsp;Ferienwohnung</font>
                                    <font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="1"><img height="5" src="../bilder/ecke1.gif" width="5" align="top"></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="../index.php">Eingangsbereich</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="../ansicht.php">Appartement</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="../preise.php">Preise</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="../service.php">Service</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2">&nbsp;<a href="../anreise.php">Anreise</a></font>
                                </div>
                                <div class="nav-block-footer">
                                    <img height="5" src="../bilder/ecke2rechts.gif" width="5">
                                </div>
                            </div>
                            <br>
                            <div class="nav-block">
                                <div class="nav-block-header">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="2">&nbsp;Information</font>
                                    <font face="Verdana, Arial, Helvetica, sans-serif" color="#ffffff" size="1"><img height="5" src="../bilder/ecke1.gif" width="5" align="top"></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="../usedom.php">&nbsp;Usedom</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="../bansin.php">&nbsp;Bansin</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="../mailform.php">&nbsp;Email</a></font>
                                </div>
                                <div class="nav-block-item">
                                    <font face="Verdana, Arial, Helvetica, sans-serif" size="2"><a href="../impressum.php">&nbsp;Impressum</a></font>
                                </div>
                                <div class="nav-block-footer">
                                    <img height="5" src="../bilder/ecke2rechts.gif" width="5">
                                </div>
                            </div>
                        </div>
                        <div class="layout-col-content">
