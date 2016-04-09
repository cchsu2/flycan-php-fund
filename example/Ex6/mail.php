<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex6</title>
</head>
<body>
<script type="text/javascript">
<?php 
mb_internal_encoding("utf-8");

$header="From: ".$_POST["from"]."\r\n
		MIME-Version: 1.0\r\n
		Content-type: text/plain; charset=utf-8";
$to=$_POST["to"];
$subject=$_POST["subject"];
$body=$_POST["content"];

if(mail($to,$subject,$body,$header)){
	$msg = "發送成功";
}else{
	$msg = "發送失敗";
}
?>
	alert("<?php echo $msg;?>");
</script>
</body>
</html>