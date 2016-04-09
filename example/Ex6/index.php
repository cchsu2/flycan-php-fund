<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex6</title>
<script src="js/jquery-1.11.0.js" type="text/javascript"></script>
<script src="js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(function(){
	$("#form1").validate();
});
</script>
</head>
<body>
	<form id="form1" name="form1" method="post" action="mail.php">
		<table border="0" cellspacing="0" cellpadding="0">
		    <tr>
		      <td>寄件人</td>
		      <td><input type="text" name="from" id="from" class="required email"/></td>
		    </tr>
		    <tr>
				<td>收件人</td>
				<td><input type="text" name="to" id="to" class="required email"/></td>
			</tr>
			<tr>
				<td>標題</td>
				<td><input type="text" name="subject" id="subject" class="required" /></td>
			</tr>
			<tr>
				<td>內容</td>
				<td><textarea name="content" id="content" cols="45" rows="5" class="required"></textarea></td>
			</tr>
			<tr>
				<td><input type="submit" value="送出" /></td>
				<td>&nbsp;</td>
			</tr>
		</table>
	</form>
</body>
</html>