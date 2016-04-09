<?php
include "function.inc";
$link = connect();
for($i=0;$i<100;$i++){
	$query = "INSERT INTO ex5 (t_title,t_content,t_time,t_user,t_password)
	VALUES('{$i}','{$i}',NOW() - INTERVAL $i MINUTE,'{$i}','{$i}')";
	mysqli_query($link, $query);
}
header("Location: index.php");
?>