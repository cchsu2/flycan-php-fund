<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Ex2</title>
</head>
<body>
<?php
	if(isset($_GET["t_name"])){
		$link = mysqli_connect("localhost","flycan","flycan","flycan");
		mysqli_query($link,"SET NAMES UTF8");
		$query = "SELECT * FROM ex2 WHERE t_name = '{$_GET["t_name"]}'";
		$result = mysqli_query($link,$query);
		if($result && mysqli_num_rows($result)>0){
			$row = mysqli_fetch_assoc($result);
			$count = $row['t_count']+1;
			$query = "UPDATE ex2 SET t_count = '{$count}' WHERE t_name = '{$_GET["t_name"]}'";
			mysqli_query($link,$query);
		}else{
			$count = 1;	
			$query = "INSERT INTO ex2 (t_name,t_count) VALUES('{$_GET["t_name"]}','{$count}')";
			mysqli_query($link,$query);
		}
		mysqli_free_result($result);
		mysqli_close($link);
		$maxLength = 10;
		$str = str_repeat("0",$maxLength-strlen($count)).$count;
		echo $str."<br/>";
		for($i=0;$i<$maxLength;$i++){
			$no = substr($str,$i,1);
			echo "<img src='{$no}.gif' />";
		}
	}else{
		echo "查無資料";
	}
?>
</body>
</html>