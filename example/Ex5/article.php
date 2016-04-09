<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 
if(!isset($_GET["index"])) header("Location: index.php");
include "function.inc";
$link = connect();
$query = "SELECT * FROM ex5 WHERE t_index = '{$_GET["index"]}'";
$result = mysqli_query($link, $query);
if(!$result || mysqli_num_rows($result) == 0)  header("Location: index.php");
$row = mysqli_fetch_assoc($result);
include "header.inc";
?>
<form id="form" name="form" method="post" action="">
	<table width="500" align="center">
<tr bgcolor="#BBBBBB">
	<td width="100" align="center">留言主題</td>
	<td><?php echo $row["t_title"];?>
	</td>
</tr>
<tr bgcolor="#DDDDDD">
	<td align="center">留言人</td>
	<td><?php echo $row["t_user"];?>
	</td>
</tr>
<tr bgcolor="#BBBBBB">
	<td align="center">留言內容</td>
	<td><?php echo $row["t_content"];?>
	</td>
</tr>
	<tr bgcolor="#DDDDDD">
		<td colspan="2" align="center">
			<input type="password" name="password" size="20" maxlength="10" />
			<input type="button" value="修改" onClick="update();" />
			<input type="button" value="刪除" onClick="del();" />

			
			<script>
				function del(){
					document.getElementById ("form").action = "process.php?check=del";
					document.getElementById ("form").submit(); 
				}
				function update(){
					document.getElementById ("form").action = "update.php";
					document.getElementById ("form").submit(); 
				}
			</script>
			<input type="hidden" name="index" value="<?php echo $_GET["index"]; ?>" />
			<font color="#FF0000">(修改或刪除需輸入密碼)</font>
		</td>
	</tr>
</table>
</form>
<?php
include "footer.inc";
?>
</body>
</html>