<?php
	$TIME_LIMIT = 60;
	$query = "SELECT * FROM ex4_user WHERE s_index = '{$_POST["s_index"]}'
			 AND t_ip = '{$_SERVER["REMOTE_ADDR"]}'
			 AND t_time > NOW() - INTERVAL $TIME_LIMIT MINUTE";
	$result = mysqli_query($link,$query);
	if($result && mysqli_num_rows($result)){
		$vote = false;
	}else{
		$vote = true;
	}
	mysqli_free_result($result);
?>