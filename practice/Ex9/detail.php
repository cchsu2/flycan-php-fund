<?php
if(!isset($_GET["index"])){
	header("index.php");
}else{
	session_start();
	include 'db_con.inc';
	$query = "SELECT * FROM ex9 WHERE t_index = {$_GET["index"]}";
	$result = mysqli_query($link, $query);
	$row = mysqli_fetch_assoc($result);	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex9</title>
<script>
function del(){
	 location.href = "delete.php?file=<?php echo $row["t_file"];?>&index=<? echo $_GET['index'];?>";
}
</script>
<body>
	<form action="update.php" method="post">
		<table style="text-align: center;">
			<tr><td>
				<img src="upload/images/<?php echo $row["u_index"];?>/<? echo $row["t_file"]; ?>" />
			</td></tr>
			<tr><td>
				<?php
					if(isset($_SESSION['user'])){
				?>
						<input type="text" name="content" id="content"  size="40" value="<? echo $row["t_content"];?>"/>
				<?php
					}else{
						echo $row["t_content"];
					}
				?>
			</td></tr>
			<tr><td>
			<?php
			$query = "SELECT t_index FROM ex9 WHERE t_index > '{$_GET["index"]}' ORDER BY t_index LIMIT 1";
			$result = mysqli_query($link,$query);
			if(mysqli_num_rows($result)){
				$row = mysqli_fetch_assoc($result);
				echo "<a href='detail.php?index={$row["t_index"]}'><</a>";
				mysqli_free_result($result);
			}
			?>
				<a href="index.php">列表</a>
			<?php
			$query = "SELECT t_index FROM ex9 WHERE t_index < '{$_GET["index"]}' ORDER BY t_index DESC LIMIT 1";
			$result = mysqli_query($link,$query);
			if(mysqli_num_rows($result)){
				$row = mysqli_fetch_assoc($result);
				echo "<a href='detail.php?index={$row["t_index"]}'>></a>";
				mysqli_free_result($result);
			}
			?>
			</td></tr>
			<?php
				if(isset($_SESSION["user"])){
			?>
			<tr><td>
				<input id="index" name="index" type="hidden" value="<? echo $_GET["index"];?>"/>
		    	<input type="submit" value="更新" /> 
		    	<input type="button" onClick="del()" value="刪除" />
			</td></tr>
			<?php
				}
			?>
		</table>
	</form>
</body>
</html>
<?php 
}
?>