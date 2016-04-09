<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "UPDATE ex1 SET t_name = '{$_POST["t_name"]}',t_phone = '{$_POST["t_phone"]}' WHERE t_index = '{$_POST["t_index"]}'";
$result = mysqli_query($link,$query);
mysqli_close($link);
header("Location: index.php");
?>