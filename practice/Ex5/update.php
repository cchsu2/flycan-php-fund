<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 

?>
<form name="form" method="post" action="process.php?check=update">
	<table width="500" align="center">
		<tr bgcolor="#BBBBBB">
			<td align="center">留言主題</td>
			<td><?php ?>
			</td>
		</tr>
		<tr bgcolor="#DDDDDD">
			<td align="center">留言人</td>
			<td><?php ?>
			</td>
		</tr>
		<tr bgcolor="#BBBBBB">
			<td align="center">留言內容</td>
			<td>
				<p>
					<textarea name="content" rows="10" cols="35"><?php ?></textarea>
					<br>
				</p>
			</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="hidden" name="index" value="<?php ?>" />
				<input type="hidden" name="password" value="<?php ?>" />
				<input type="submit" value="更新留言" />
			</td>
		</tr>
	</table>
</form>
<?php

?>
	<script>
		alert("錯誤");
		location.href = "article.php?index=<?php ?>";
	</script>
<?php

?>
</body>
</html>