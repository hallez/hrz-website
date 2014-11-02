<?php

print <<< EOT
<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halle Zucker</title>

	<script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
	<script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<link rel="stylesheet" href="/static/css/application.css" type="text/css" />
</head>

<body>
	<div id="wrap">
	<div id="header">
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
		<div class="container">
			$title
		</div>
	</nav>
	</div>
		<div class="container page">
EOT;
?>
