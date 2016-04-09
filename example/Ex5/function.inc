<?php
function connect(){
	$host	= "localhost";
	$user	= "flycan";
	$password	= "flycan";
	$database	= "flycan";
	$link = mysqli_connect($host, $user, $password, $database);
	mysqli_query($link,"SET NAMES UTF8");
	return $link;
}
function pwCheck($link){
	$query = "SELECT * FROM ex5 WHERE t_index='{$_POST["index"]}' AND t_password='{$_POST["password"]}'";
	$result = mysqli_query($link,$query);
	if (!$result || !mysqli_num_rows($result)>0)
	{
		return false;
	}else{
		return true;
	}
}
?>