<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
	<?php
	if(!isset($_GET["check"])) header("Location: index.php");
	include "function.inc";
	$link = connect();
	$check = $_GET["check"];
	$timezone = "Asia/Taipei";
	date_default_timezone_set($timezone);
	$time = date("Y-m-d H:i:s");
	if(isset($_POST["content"])) $content = htmlspecialchars($_POST["content"],ENT_QUOTES);
	switch($check){
		case "add":
			if($_POST['password'] == ""){
				$query = "INSERT INTO ex5 (t_title,t_content,t_time,t_user) VALUES('{$_POST["title"]}','{$content}','{$time}','{$_POST["user"]}')";
			}else{
				$query = "INSERT INTO ex5 (t_title,t_content,t_time,t_user,t_password) VALUES('{$_POST["title"]}','{$content}','{$time}','{$_POST["user"]}','{$_POST["password"]}')";
			}
			$message = "新增完成";
			break;
		case "del":
			if(pwCheck($link)){
				$query = "DELETE FROM ex5 WHERE t_index = '{$_POST["index"]}'";
				$message = "刪除完成";
			}else{
				$message = "錯誤";
				goto end;
			}
			break;
		case "update":
			if(pwCheck($link)){
				$query = "UPDATE ex5 SET t_content = '{$content}',t_time = '{$time}' WHERE t_index = '{$_POST["index"]}'";
				$message = "更新完成";
			}else{
				$message = "錯誤";
				goto end;
			}
			break;
	}
	mysqli_query($link, $query);
	end:
	?>
<script>
	alert("<?php echo $message; ?>");
	location.href = "index.php";
</script>
</body>
</html>