<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ex1</title>
</head>
<body>
<form action="do_update.php" method="post">
<table width="500">
	<tr>
    	<td>姓名</td>
    	<td>電話</td>
    	<td>&nbsp;</td>
 	</tr>
	<tr>
<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "SELECT * FROM ex1 WHERE t_index = '{$_GET["t_index"]}'";
$result = mysqli_query($link,$query);
mysqli_close($link);
$row = mysqli_fetch_assoc($result);
?>
	<td><input name="t_name" type="text" maxlength="6" value="<?php echo $row["t_name"];?>"/></td>
	<td><input name="t_phone" type="text" maxlength="10" value="<?php echo $row["t_phone"];?>"/></td>
<?php
mysqli_free_result($result);
?>
    	<td>
    		<input name="t_index" type="hidden" value="<?php echo $_GET["t_index"];?>"/>
    		<input name="" type="submit" value="更新" />
    	</td>
 	</tr>
</table>
</form>
</body>
</html>