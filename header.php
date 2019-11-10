<?php 
require 'config.php'
 ?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="bg-grd text-white">
<nav class="navbar shadow bg-light navbar-expand h5 bg-grd" style="height: 100px;">
	<a class="navbar-brand text-white">
		<?= $srvname; ?>
	</a>
	<ul class="navbar-nav mr-auto">
		<li class="nav-item">
			<a class="nav-link text-white" href="<?= $homel ?>">Home</a>
		</li>
		<li class="nav-item">
			<a class="nav-link text-white" href="status.php">Status</a>
		</li>
	</ul>
</nav>