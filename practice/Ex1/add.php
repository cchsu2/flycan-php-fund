<?php
	$link=mysqli_connect("localhost", "ner","nerner", "ner");
	mysqli_query($link, "SET NAMES UFT8");
	
	$query="INSERT INTO ex1(t_name,t_phone) VALUES ('{$_POST["name"]}','{$_POST["phone"]}')";
	
	mysqli_query($link, $query);
	mysqli_close($link);
	
	header("Location:index.php");
?>