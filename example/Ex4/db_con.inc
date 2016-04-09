<?php
	$host	= "localhost";
	$user	= "flycan";
	$password	= "flycan";
	$database	= "flycan";
	$link = mysqli_connect($host, $user, $password, $database);
	mysqli_query($link,"SET NAMES UTF8");
?>