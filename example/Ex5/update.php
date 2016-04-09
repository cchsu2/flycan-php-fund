<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 
if(!isset($_POST["index"])) header("Location: index.php");
include "function.inc";
$link = connect();
if(pwCheck($link)){
	$query = "SELECT * FROM ex5 WHERE t_index = '{$_POST["index"]}'";
	$result = mysqli_query($link, $query);
	if(!$result || mysqli_num_rows($result) == 0) goto error;
	$row = mysqli_fetch_assoc($result);
	include "header.inc";
?>
<form name="form" method="post" action="process.php?check=update">
	<table width="500" align="center">
		<tr bgcolor="#BBBBBB">
			<td align="center">留言主題</td>
			<td><?php echo $row["t_title"]; ?>
			</td>
		</tr>
		<tr bgcolor="#DDDDDD">
			<td align="center">留言人</td>
			<td><?php echo $row["t_user"]; ?>
			</td>
		</tr>
		<tr bgcolor="#BBBBBB">
			<td align="center">留言內容</td>
			<td>
				<p>
					<textarea name="content" rows="10" cols="35"><?php echo $row["t_content"]; ?></textarea>
					<br>
				</p>
			</td>
		</tr>
		<tr align="center">
			<td colspan="2">
				<input type="hidden" name="index" value="<?php echo $_POST["index"];?>" />
				<input type="hidden" name="password" value="<?php echo $_POST["password"];?>" />
				<input type="submit" value="更新留言" />
			</td>
		</tr>
	</table>
</form>
<?php
	include "footer.inc";
}else{
	error:
?>
	<script>
		alert("錯誤");
		location.href = "article.php?index=<?php echo $_POST["index"];?>";
	</script>
<?php
}
?>
</body>
</html>