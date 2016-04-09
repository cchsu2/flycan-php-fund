<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex4</title>
</head>
    <body>
<?php
	include "db_con.inc";
	include "ip_check.inc";
?>
<script>
<?php
	if($vote){
		$query = "UPDATE ex4_option SET t_count = t_count+1 WHERE t_index = '{$_POST["t_index"]}'";
		mysqli_query($link,$query);
		$query = "INSERT INTO ex4_user (s_index, t_ip) VALUES ('{$_POST["s_index"]}', '{$_SERVER["REMOTE_ADDR"]}')";
		mysqli_query($link,$query);
		mysqli_close($link);
		echo "alert('票數已計入');";
	}else{
		echo "alert('{$TIME_LIMIT}分鐘內不可重複投票');";
	}
	echo "location.href = 'index.php?s_index={$_POST["s_index"]}';";
?>
</script>
</body>
</html>