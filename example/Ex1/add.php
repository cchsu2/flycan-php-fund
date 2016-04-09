<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "INSERT INTO ex1(t_name,t_phone) VALUES('{$_POST["name"]}','{$_POST["phone"]}')";
$result = mysqli_query($link,$query);
mysqli_close($link);
header("Location: index.php");
?>