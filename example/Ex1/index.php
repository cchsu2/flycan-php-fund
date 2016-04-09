<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ex1</title>
</head>
<body>
<form action="add.php" method="post">
<table width="500">
	<tr>
    	<td>姓名</td>
    	<td>電話</td>
    	<td>&nbsp;</td>
    	<td>&nbsp;</td>
 	</tr>
<?php
$link = mysqli_connect("localhost","flycan","flycan","flycan");
mysqli_query($link,"SET NAMES UTF8");
$query = "SELECT * FROM ex1";
$result = mysqli_query($link,$query);
mysqli_close($link);
while($row = mysqli_fetch_assoc($result)){
?>
	<tr>
    	<td><?php echo $row["t_name"];?></td>
    	<td><?php echo $row["t_phone"];?></td>
    	<td><a href="update.php?t_index=<?php echo $row["t_index"];?>">修改</a></td>
    	<td><a href="del.php?t_index=<?php echo $row["t_index"];?>">刪除</a></td>
 	</tr>
<?php 
}
mysqli_free_result($result);
?>
	<tr>
    	<td><input name="name" type="text" maxlength="6" /></td>
    	<td><input name="phone" type="text" maxlength="10" /></td>
    	<td><input name="" type="submit" value="新增" /></td>
    	<td>&nbsp;</td>
 	</tr>
</table>
</form>
</body>
</html>