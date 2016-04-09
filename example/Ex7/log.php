<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex7</title>
<body>
<?php
session_start();
if(isset($_POST["email"]) && isset($_POST["password"])){
	include "function.inc";
	$link = connect();
	$query = "SELECT t_check FROM ex7 WHERE t_email = '{$_POST["email"]}' AND t_password = MD5('{$_POST["password"]}')";
	$result = mysqli_query($link,$query);
	if($result && mysqli_num_rows($result)){
		$row = mysqli_fetch_array($result);
		if($row[0] == 1){
			$_SESSION["user"] = strchr($_POST["email"], "@", true);
?>
			登入成功，三秒鐘後自動跳轉<br/>
<?php 		
		}else{
?>
			請點擊會員認證信連結認證，三秒鐘後自動跳轉<br/>
<?php
		}
	}else{
?>
			帳號或密碼錯誤，三秒鐘後自動跳轉<br/>
<?php
	}
}else{
	unset($_SESSION["user"]);	
	session_destroy();
	header("Location: index.php");
}
header("Refresh:3;url=index.php");
?>
	如果跳轉失敗可以點 <a href='index.php'>連結</a> 回到首頁
</body>
</html>