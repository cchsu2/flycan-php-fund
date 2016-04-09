<?php
	if(isset($_SESSION["user"])){
?>
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
			document.getElementById ("fileform").submit(); 
		}
	}
</script>
<form id="fileform" name="fileform" method="post" enctype="multipart/form-data" action="upload.php">
<table style="width:500px;text-align:center;">
	<tr>
		<td>
			檔案：<input id="file" name="file[]" type="file" accept="image/*"  size="30">
		</td>
	</tr>
	<tr>
		<td>
			說明： <input type="text" name="content" id="content"  size="40"/>
		</td>
	</tr>
	<tr>
		<td>
			<input id="id" name="id" type="hidden" value="<?php echo $_SESSION["id"];?>"/>
			<input type="button" value="上傳 " onclick="checkFile()"/>
		</td>
	</tr>
</table>
</form>
<?php
	}
?>