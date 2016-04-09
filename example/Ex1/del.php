<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "DELETE FROM ex1 WHERE t_index = '{$_GET["t_index"]}'";
$result = mysqli_query($link,$query);
mysqli_close($link);
header("Location: index.php");
?>