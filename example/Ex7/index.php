<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex7</title>
<body>
	<form id="form" name="form" method="post" action="log.php">	
	<table width="500">
		<?php
		session_start();
		if(isset($_SESSION["user"])){
		?>
		<tr>
			<td>Hi,<?php echo $_SESSION["user"];?></td>
		</tr>
		<tr>
			<td><a href="log.php">登出</a></td>
		</tr>
		<?php
			}else{
		 ?>
		<tr>
			<td><a href="register.html">快速註冊</a></td>
		</tr>	
		<tr>
			<td>電子郵件： <input type="text" name="email" id="email" /></td>
		</tr>
		<tr>
			<td>登入密碼： <input type="password" name="password" id="password" /></td>
		</tr>
		<tr>
			<td><input type="submit" value="登入" /></td>
		</tr>
		<?php
			}
		?>
	</table>
	</form>
</body>
</html>
