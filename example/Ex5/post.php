<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 
include "header.inc";
?>
<form name="form" method="post" action="process.php?check=add">
	<table width="500" align="center">
	<tr bgcolor="#BBBBBB">
		<td align="center">留言主題</td>
		<td><input type="text" name="title" size="50" maxlength="50" />
		</td>
	</tr>
	<tr bgcolor="#DDDDDD">
		<td align="center">留言人</td>
		<td><input type="text" name="user" size="30" maxlength="10" />
		</td>
	</tr>
	<tr bgcolor="#BBBBBB">
		<td align="center">留言內容</td>
		<td>
			<p>
				<textarea name="content" rows="10" cols="35"></textarea>
				<br>
			</p>
		</td>
	</tr>
	<tr bgcolor="#DDDDDD">
		<td align="center">留言密碼</td>
		<td><input type="password" name="password" size="20" maxlength="10" />
			<font color="#FF0000">(修改或刪除需輸入密碼) </font>
		</td>
	</tr>
	<tr align="center">
		<td colspan="2">
			<input type="reset" value="清除重填" /> <input	type="submit" value="送出留言" />
		</td>
	</tr>
</table>
</form>
<?php
include "footer.inc";
?>
</body>
</html>