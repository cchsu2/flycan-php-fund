<?php
include "db_con.inc";
$query = "UPDATE ex9 SET t_content = '{$_POST["content"]}' WHERE t_index = '{$_POST["index"]}'";
mysqli_query($link,$query);
mysqli_close($link);
header("Location: detail.php?index={$_POST["index"]}");
?>