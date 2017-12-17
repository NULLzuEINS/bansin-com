<!DOCTYPE html>
<html lang="de">
<head>
	<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo html($site->description()) ?>"/>
	<meta name="keywords" content="<?php echo html($site->keywords()) ?>"/>
	<meta name="robots" content="index, follow"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css"
				integrity="sha256-v5YlJGWVLS5hQ+o48fBzCKHEP2vMNsku57x3CosYykc=" crossorigin="anonymous">
	<?php echo css('assets/css/datepicker.css') ?>
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
	<link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
	<link rel="shortcut icon" href="/assets/ico/favicon.png">
	<base href="http://<?php echo $_SERVER['HTTP_HOST'] ?>">
</head>
<body>

