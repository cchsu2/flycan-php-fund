<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex3</title>
</head>
    <body>
<table width="500">
<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "SELECT * FROM ex3 ORDER BY t_time DESC";
$result = mysqli_query($link,$query);
mysqli_close($link);
while($row = mysqli_fetch_assoc($result)){
	$str = $row['t_text'];
	if(strlen($str)>50){
		$str = mb_substr($str,0,50,'utf-8')."...";
	}
?>
	<tr>
		<td style="font-size:16px;font-weight:bold;">
			<a href="article.php?t_index=<?php echo $row["t_index"];?>"><?php echo $row["t_title"];?></a>
		</td>
	</tr>
	<tr>
		<td style="font-size:12px;"><?php echo $str;?></td>
	</tr>
	<tr>
		<td style="text-align:right;font-size:12px;"><?php echo $row["t_time"];?></td>
	</tr>
<?php
}
mysqli_free_result($result);
?>
</table>
    </body>
</html>