<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex9</title>
<style>
	#photo td{
		width:100;
		height:100;
		text-align:center;
		vertical-align:middle;	
	}
</style>
<body>
<?php 
session_start();
include "log.inc";
$check = 3;
if(!isset($_GET["p"])){
	$p = 1;
}else{
	$p = $_GET["p"];
}
include 'db_con.inc';
$query = "SELECT COUNT(*) FROM ex9";
$result = mysqli_query($link, $query);
$row =  mysqli_fetch_array($result);
$total = $row[0] ;
$maxPage = $total > 0 ? ceil($total / $check) : 1;
if( $p > $maxPage || $p < 1 || !is_numeric($p)){
	$p = 1;
	header("Location: index.php");
}
if($total == 0){
?>
<table width="500" height="200">
<?php
	echo "<tr><td align='center'>沒有任何圖片</td></tr>";
}else{
	$start = ($p-1)*$check;
	$query = "SELECT * FROM ex9 ORDER BY t_index DESC LIMIT {$start},{$check}";
	$result = mysqli_query($link, $query);
	echo "<table id='photo' width='500' height='200'>";
	$num = mysqli_num_rows($result);
	for ($i=0;$i<$check;$i++){
		if($i%3==0){
			echo "<tr>";
		}
		if($i<$num){
			$row = mysqli_fetch_assoc($result);
			echo "<td><a href='detail.php?index={$row["t_index"]}'><img src='upload/thumbs/{$row["u_index"]}/{$row["t_file"]}' /></a></td>";
		}else{
			echo "<td>&nbsp;</td>";
		}
		if($i%3==2){
			echo "</tr>";
		}
	}
?>
</table>
<?php
}
	include "page.inc";
	echo "<br/>";
	include "upload.inc";
?>
</body>
</html>