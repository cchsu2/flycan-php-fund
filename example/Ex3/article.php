<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
    <body>
<table width="500">
<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "SELECT * FROM ex3 WHERE t_index = '{$_GET["t_index"]}'";
$result = mysqli_query($link,$query);
$row = mysqli_fetch_assoc($result);
?>
	<tr>
		<td style="font-size:16px;font-weight:bold;"><?php echo $row["t_title"];?></td>
	</tr>
	<tr>
		<td style="font-size:12px;"><?php echo $row["t_text"];?></td>
	</tr>
	<tr>
		<td style="text-align:right;font-size:12px;"><?php echo $row["t_time"];?></td>
	</tr>
	<tr>
		<td style="text-align:center;font-size:16px;font-weight:bold;">
<?php
mysqli_free_result($result);
$query = "SELECT t_index FROM ex3 WHERE t_index < '{$_GET["t_index"]}' ORDER BY t_index DESC LIMIT 1";
$result = mysqli_query($link,$query);
if($result && mysqli_num_rows($result)){
	$row = mysqli_fetch_assoc($result);
	echo "<a href='article.php?t_index={$row['t_index']}'>上一筆</a>";
	mysqli_free_result($result);
}else{
	echo "上一筆";
}
?>

			<a href="index.php">列表</a>

<?php
$query = "SELECT t_index FROM ex3 WHERE t_index > '{$_GET["t_index"]}' ORDER BY t_index LIMIT 1";
$result = mysqli_query($link,$query);
if($result && mysqli_num_rows($result)){
	$row = mysqli_fetch_assoc($result);
	echo "<a href='article.php?t_index={$row['t_index']}'>下一筆</a>";
	mysqli_free_result($result);
}else{
	echo "下一筆";
}
mysqli_close($link);
?>
		</td>
	</tr>
</table>
    </body>
</html>