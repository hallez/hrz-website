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
				<div class="row">
					<div class="col-xs-3">
						<h2>$title</h2>
					</div>
					<div class="col-xs-9">
						<div class="collapse navbar-collapse" id="navbar-collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="/publications/">Publications</a></li>
								<li><a href="/cv/">CV</a></li>
								<li><a href="/current-research/">Current research</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
		<div class="container page">
			<div class="row">
				<div class="col-xs-2">
					<a href="/">
						<img src="https://s.gravatar.com/avatar/ceb96a0515eadec4560913866b7e5d18?s=200" class="img-responsive"/>
					</a>
				</div>
				<div class="col-xs-10">
EOT;
?>
