<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex8</title>
<script src="js/jquery-1.11.0.js" type="text/javascript"></script>
<script src="js/jquery-migrate-1.2.1.js" type="text/javascript"></script>
<script type="text/javascript">
	var fileSize = 0;
	var sizeLimit = 2097152;
	function checkFile() {
		var f = document.getElementById("file");
		var fileName = f.value;
		if(fileName == ""){
	        alert("請選擇檔案");
	        return;
		}
		var ext_index = fileName.lastIndexOf('.');
		var ext = fileName.substr(ext_index+1);
		ext = ext.toLowerCase();
		if(ext != "jpg" && ext != "jpeg"){
			alert("僅支援jpg");	
	        return;
		}
		if ($.browser.msie) {//FOR IE
			var img = new Image();
			img.onload = checkSize;
			img.src = f.value;
		}else{//FOR Firefox,Chrome
	    	fileSize = f.files.item(0).size;
			checkSize();
		}
	}
	function checkSize() {
		if ($.browser.msie) {//FOR IE
			fileSize = this.fileSize;
		}
		if (fileSize > sizeLimit || fileSize < 0) {
			alert("檔案大小不符合限制");
		}else{
			document.getElementById ("form").submit();
		}
	}
</script>
</head>
<body>
<form id="form" name="form" method="post" enctype="multipart/form-data" action="resize.php">
  <input id="file" name="file[]" type="file" accept="image/*" class="required"/>
  <input type="button" value="上傳 " onclick="checkFile()"/>
</form>
<?php
if(isset($_GET['filename'])){
?>
	<img src="<?php echo "upload/thumbs/".$_GET["filename"]?>"/>
	<img src="<?php echo "upload/images/".$_GET["filename"]?>"/>
<?php
}
?>
</body>
</html>