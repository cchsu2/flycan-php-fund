<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex0</title>
<body>
	<a href="http://www.flycan.com.tw/">flycan</a>
	<?php 
		$link = "http://www.flycan.com.tw/";
		$content = "flycan";
		echo "<a href='{$link}'>{$content}</a>";
		//使用雙引號echo
		echo '<a href="'.$link.'">'.$content.'</a>';
		//使用單引號echo
	?>
	<a href="<?php echo $link;?>"><?php echo $content;?></a>
	<!-- 使用分割式echo -->
</body>
</html>