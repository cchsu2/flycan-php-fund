<form id="form" name="form" method="post" action="log.php">	
<table style="width:500px;text-align:center;">
	<?php
		if(isset($_SESSION["user"])){
	?>
	<tr>
		<td>Hi,<?php echo $_SESSION["user"];?> <a href="log.php">登出</a></td>
	</tr>
	<?php
		}else{
	?>
	<tr>
		<td>帳號： <input type="text" name="email" id="email" /> 密碼： <input type="password" name="password" id="password" /> <input type="submit" value="登入" /></td>
	</tr>
	<?php
		}
	?>
</table>
</form>