<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex5</title>
</head>
<body>
<?php 
include "header.inc";
include "function.inc";
$link = connect();
$check = 5;
if(!isset($_GET["p"])){
	$p = 1;
}else{
	$p = $_GET["p"];
}
$query = "SELECT COUNT(*) FROM ex5";
$result = mysqli_query($link, $query);
$row =  mysqli_fetch_array($result);
$total = $row[0] ;
$maxPage = $total > 0 ? ceil($total / $check) : 1;
if( $p > $maxPage || $p < 1 || !is_numeric($p)){
	$p = 1;
	header("Location: index.php");
}
?>
	<table width="500" align="center">
		<tr bgcolor="#999999">
			<td width="300" align="center"><font color="#FFFFFF">留言主題</font>
			</td>
			<td width="100" align="center"><font color="#FFFFFF">留言人</font>
			</td>
			<td width="100" align="center"><font color="#FFFFFF">留言時間</font>
			</td>
		</tr>
<?php
if($row[0] == 0){
?>
		<tr bgcolor="#FFFFFF"><td colspan="3" align="center">沒有任何留言</td></tr>
<?php
}else{
	$start = ($p-1)*$check;
	$query = "SELECT * FROM ex5 ORDER BY t_time DESC LIMIT {$start},{$check}";
	$result = mysqli_query($link, $query);
	
	
	for ($i=0;$i<mysqli_num_rows($result);$i++){
			$row = mysqli_fetch_assoc($result);
			if ($i%2 == 0){
?>
		<tr bgcolor="#DDDDDD">
<?php
			}else{
?>
		<tr bgcolor="#BBBBBB">
<?php
			}
?>
			<td><a href="article.php?index=<?php echo $row["t_index"];?>">
<?php
			if (strlen($row["t_title"])>20){
				echo mb_substr($row["t_title"],0,20,"utf-8") . "...";
			}else{
				echo $row["t_title"] ;
			}
?>
			</a></td>
			<td align="center"><?php echo $row["t_user"];?></td>
			<td align='center'>
<?php		
			$t = substr($row["t_time"], 0,16);
			echo $t;
?>
			</td>
		</tr>
<?php
	}
}
mysqli_free_result($result);
mysqli_close($link);
?>
	<tr bgcolor="#999999">
		<td colspan="3" align="center"><font color="#FFFFFF"><a href="post.php">發布留言</a>
		</font>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
<?php
if($p>1){
	$pp = $p-1;
	echo "<a href='index.php?p={$pp}'><</a> ";
}

echo "&nbsp;";

$end = $p+2<=$maxPage?$p+2:$maxPage;
$start = $end-4>=1?$end-4:1;
if($end-$start<4){
	$end = $start+4<=$maxPage?$start+4:$maxPage;
}
for($i=$start;$i<=$end;$i++){
	if($i==$p){
		echo $i;
	}else{
		echo "<a href='index.php?p={$i}'>{$i}</a>";
	}
	echo "&nbsp;";
}
if($p<$maxPage){
	$np = $p+1;
	echo "<a href='index.php?p={$np}'>></a>";
}
?>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center">
			<form name="pf" method="get" action="index.php">
				<select name="p" onChange="submit();">
					<option value="">
						快速換頁
					</option>
<?php 
	for ( $i=1; $i<=$maxPage; $i++ ){
		echo "<option value=" . $i . ">第 " . $i . " 頁</option>";
	}
?>
				</select>
			</form>
		</td>
	</tr>
</table>
<?php
include "footer.inc";
?>
</body>
</html>