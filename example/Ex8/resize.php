<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Ex8</title>
</head>
<body>
上傳中
<?php
if($_FILES["file"]["name"][0] != ""){
	$file_name = $_FILES["file"]["name"][0];
	$extend = substr(strrchr($file_name, "."),1);
	$time=date("Y_m_d_His");
	$upload_name = $time.".".$extend;
	
	$thumbsize = 50;
	$src = imagecreatefromjpeg($_FILES["file"]["tmp_name"][0]);
	$src_w = imagesx($src);
	$src_h = imagesy($src);
	if($src_w > $src_h){
		$temp_length = $src_h;
	}else{
		$temp_length = $src_w;
	}
	$start_x = ( $src_w - $temp_length ) / 2;
	$start_y = ( $src_h - $temp_length ) / 2;
	$temp_pic = imagecreatetruecolor($temp_length,$temp_length);
	imagecopy($temp_pic, $src, 0, 0, $start_x, $start_y, $temp_length, $temp_length );
	imagedestroy($src);
	
	if(!is_dir("upload")) {
		$path="upload";
		mkdir($path,'0777');
	}
	if(!is_dir("upload/images")) {
		$path="upload/images";
		mkdir($path,'0777');
	}
	if(!is_dir("upload/thumbs")) {
		$path="upload/thumbs";
		mkdir($path,'0777');
	}
	
	if($temp_length <= $thumbsize){
		imagejpeg($temp_pic, "upload/thumbs/".$upload_name);
		imagedestroy($temp_pic);
	}else{
		$thumb = imagecreatetruecolor($thumbsize, $thumbsize);
		imagecopyresampled($thumb, $temp_pic, 0, 0, 0, 0, $thumbsize, $thumbsize, $temp_length, $temp_length);
		imagedestroy($temp_pic);
		imagejpeg($thumb, "upload/thumbs/".$upload_name);
		imagedestroy($thumb);
	}
	
	move_uploaded_file($_FILES["file"]["tmp_name"][0], "upload/images/" . $upload_name);
	header("Location:index.php?filename=". $upload_name);
}else{
    header("Location:index.php");
}
?>
</body>
</html>