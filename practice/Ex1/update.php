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

?>
	<td><input name="t_name" type="text" maxlength="6" value="<?php ?>"/></td>
	<td><input name="t_phone" type="text" maxlength="10" value="<?php ?>"/></td>
<?php

?>
    	<td>
    		<input name="t_index" type="hidden" value="<?php ?>"/>
    		<input name="" type="submit" value="更新" />
    	</td>
 	</tr>
</table>
</form>
</body>
</html>