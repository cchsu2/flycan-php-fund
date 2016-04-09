<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex7</title>
<body>
<?php
if(isset($_POST["email"]) && isset($_POST["password"]) ){
	include "function.inc";
	$link = connect();
	$query = "SELECT t_email FROM ex7 WHERE t_email = '{$_POST["email"]}'";
	$result = mysqli_query($link,$query);
	if($result && mysqli_num_rows($result)){
?>
		電子郵件重複，三秒鐘後自動跳轉<br/>
<?php
		goto fail;
	}else{
		$query = "INSERT INTO ex7 (t_email,t_password) VALUES('{$_POST['email']}',MD5('{$_POST["password"]}'))";
		$result = mysqli_query($link,$query);
		if($result && mysqli_affected_rows($link)){
			$index = mysqli_insert_id($link);
			mb_internal_encoding("utf-8");
			$header="From: djalexxx@msn.com\r\n
			MIME-Version: 1.0\r\n
			Content-type: text/html; charset=utf-8";
			$body="<a href='http://localhost/flycan/example/ex7/check.php?id=".$index."@".md5($_POST["password"])."'>啟用帳號</a>";
			mail($_POST["email"],"會員認證信",$body,$header)
?>
			註冊成功，三秒鐘後自動跳轉<br/>
			如果跳轉失敗可以點 <a href='index.php'>連結</a> 回到首頁
<?php
			header("Refresh:3;url=index.php");
		}else{
?>
			註冊失敗，三秒鐘後自動跳轉<br/>
<?php
fail:
?>
			如果跳轉失敗可以點 <a href='register.html'>連結</a> 回到註冊頁
<?php
			header("Refresh:3;url=register.html");
		}
	}
}else{
	header("Location: index.php");
}
?>
</body>
</html>