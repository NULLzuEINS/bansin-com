<?php
mb_internal_encoding('UTF-8');
header('Content-Type: text/html; charset=utf-8');

$scheme        = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')
    || ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? '') === 'https'
    ? 'https' : 'http';
$serverAddress = $scheme . '://' . ($_SERVER['HTTP_HOST'] ?? 'bansin.com') . '/';

$contactTitle = 'Ihre Ferienwohnung in Bansin an der Ostsee';
$contactWebsite = 'Villa Cosima';
$contactEmail = 'rlademann@web.de';
$contactEmailCopy = 'gefangen@web.de';
$contactName = 'Roland Lademann';
$contactSignature = 'Ein schöner Urlaub!';

$noticeTop = '###########################\n\n\n';
$noticeBottom = '\n\n\n############### bansin.com ####';
