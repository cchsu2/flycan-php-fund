<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 

?>
	<table width="500" align="center">
		<tr bgcolor="#999999">
			<td width="300" align="center"><font color="#FFFFFF">留言主題</font>
			</td>
			<td width="100" align="center"><font color="#FFFFFF">留言人</font>
			</td>
			<td width="100" align="center"><font color="#FFFFFF">留言時間</font>
			</td>
		</tr>
<?php

?>
		<tr bgcolor="#FFFFFF"><td colspan="3" align="center">沒有任何留言</td></tr>
<?php

?>
		<tr bgcolor="#DDDDDD">
<?php

?>
		<tr bgcolor="#BBBBBB">
<?php

?>
			<td><a href="article.php?index=<?php ?>">
<?php

?>
			</a></td>
			<td align="center"><?php ?></td>
			<td align='center'>
<?php		

?>
			</td>
		</tr>
<?php

?>
	<tr bgcolor="#999999">
		<td colspan="3" align="center"><font color="#FFFFFF"><a href="post.php">發布留言</a>
		</font>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
<?php

?>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<form name="pf" method="get" action="index.php">
				<select name="p" onChange="submit();">
					<option value="">
						快速換頁
					</option>
<?php 

?>
				</select>
			</form>
		</td>
	</tr>
</table>
<?php

?>
</body>
</html>