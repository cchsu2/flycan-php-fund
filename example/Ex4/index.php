<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex4</title>
</head>
    <body>
<?php	
	if(!isset($_GET['s_index'])){
		goto nodata;
	}else{
		include "db_con.inc";
		$query = "SELECT t_name FROM ex4_subject WHERE t_index = '{$_GET["s_index"]}'";
		$result = mysqli_query($link,$query);
		if($result && mysqli_num_rows($result)){
			$row = mysqli_fetch_row($result);
			$subject = $row[0];
		}else{
			goto close;
		}
		$query = "SELECT SUM(t_count) FROM ex4_option WHERE s_index = '{$_GET["s_index"]}'";
		$result = mysqli_query($link,$query);
		if($result && mysqli_num_rows($result)>0){
			$row = mysqli_fetch_row($result);
			$total = $row[0];
		}else{
			goto close;
		}
		$query = "SELECT * FROM  ex4_option WHERE s_index = '{$_GET["s_index"]}'";
		$result = mysqli_query($link,$query);
		if($result && mysqli_num_rows($result)>0){
?>
	<p><?php echo $subject;?></p>
	<form method="post" action="vote.php">
	<table width="500">
	<?php
		while($row = mysqli_fetch_assoc($result)){
			$per = @floor(($row['t_count']/$total)*100) . "%";
	?>
	<tr>
		<td width="30" align="center">
			<input type="radio" name="t_index" value="<?php echo $row["t_index"];?>"/>
		</td>
		<td width="300"><?php echo $row["t_name"];?></td>
		<td width="50" align="center"><?php echo $per;?></td>
		<td width="120" align="center"><?php echo $row["t_count"];?></td>
	</tr>
	<?php
		}
	?>
	</table>
	<input name="s_index" type="hidden" value="<?php echo $_GET["s_index"];?>"/>
	<p><input type='submit' value='投票'></p>
	</form>
<?php
			goto end;
		}else{
			goto close;
		}
	}
	close:
	mysqli_close($link);
	nodata:
	echo "查無資料";
	end:
?>
    </body>
</html>