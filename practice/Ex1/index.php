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

?>
	<tr>
    	<td><?php ?></td>
    	<td><?php ?></td>
    	<td><a href="update.php?t_index=<?php ?>">修改</a></td>
    	<td><a href="del.php?t_index=<?php ?>">刪除</a></td>
 	</tr>
<?php 

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