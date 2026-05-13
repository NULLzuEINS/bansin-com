<?php
include "config.inc.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <header class="layout-topbar">
                <div class="layout-topbar-spacer-l">&nbsp;</div>
                <div class="layout-topbar-title">
                    <?= $contactTitle ?>
                </div>
                <div class="layout-topbar-spacer-r">&nbsp;</div>
            </header>
            <div class="layout-banner" style="background-image:url(bilder/banner/<?= date("H") ?>kopf.jpg)">&nbsp;</div>
            <div class="layout-content-area">
                <div align="left"><br>
                    <div class="layout-row">
                        <nav class="layout-col-nav">
                            <div class="nav-block">
                                <div class="nav-block-header">
                                    <span>Ferienwohnung</span>
                                    <img height="5" src="../bilder/ecke1.gif" width="5" align="top">
                                </div>
                                <div class="nav-block-item">
                                    <a href="../index.php">Eingangsbereich</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../ansicht.php">Appartement</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../preise.php">Preise</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../service.php">Service</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../anreise.php">Anreise</a>
                                </div>
                                <div class="nav-block-footer">
                                    <img height="5" src="../bilder/ecke2rechts.gif" width="5">
                                </div>
                            </div>
                            <br>
                            <div class="nav-block">
                                <div class="nav-block-header">
                                    <span>Information</span>
                                    <img height="5" src="../bilder/ecke1.gif" width="5" align="top">
                                </div>
                                <div class="nav-block-item">
                                    <a href="../usedom.php">Usedom</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../bansin.php">Bansin</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../mailform.php">Email</a>
                                </div>
                                <div class="nav-block-item">
                                    <a href="../impressum.php">Impressum</a>
                                </div>
                                <div class="nav-block-footer">
                                    <img height="5" src="../bilder/ecke2rechts.gif" width="5">
                                </div>
                            </div>
                        </nav>
                        <main class="layout-col-content">
