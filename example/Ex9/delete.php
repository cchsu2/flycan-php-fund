<?php
session_start();
if(!isset($_GET["file"]) || !isset($_GET["index"]) || !isset($_SESSION["id"])){
	header("index.php");
}else{
	include 'db_con.inc';
	unlink("upload/thumbs/{$_SESSION['id']}/{$_GET['file']}");
	unlink("upload/images/{$_SESSION['id']}/{$_GET['file']}");
	$query = "DELETE FROM ex9 WHERE t_index = '{$_GET["index"]}'";
	mysqli_query($link,$query);
	mysqli_close($link);
	header("Location: index.php");
}
?>