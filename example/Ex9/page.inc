<form name="pf" method="get" action="index.php">
<table style="width:500px;text-align:center;">
	<tr><td>
			<select name="p" onChange="submit();">
				<option value="">
					快速換頁
				</option>
					<?php 
					for ( $i=1; $i<=$maxPage; $i++ )
						echo "<option value=" . $i . ">第 " . $i . " 頁</option>";
				 ?>
			</select>
	</td></tr>
</table>
</form>