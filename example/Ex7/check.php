<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex7</title>
</head>
<body>
<?php
	if(!isset($_GET["id"])){
		header("Location: index.php");
	}else {
		include "function.inc";
		$link = connect();
		$index = strchr($_GET["id"], "@", true);
		$password = substr(strchr($_GET['id'], "@"),1);
		$query = "UPDATE ex7 SET t_check = 1 WHERE t_index = '$index' AND t_password = '$password'";
		$result = mysqli_query($link,$query);
		if($result && mysqli_affected_rows($link)){
?>
			認證成功，三秒鐘後自動跳轉<br/>
<?php
		}else{
?>
			認證失敗，三秒鐘後自動跳轉<br/>
<?php
		}
		header("Refresh:3;url=index.php");
?>
			如果跳轉失敗可以點 <a href='index.php'>連結</a> 回到首頁
<?php
	}
?>
</body>
</html>