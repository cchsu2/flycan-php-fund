<?php
	session_start();
	//開始使用 session
	$_SESSION['user'] = "TEST";
	//設定名為 user 的 session，內容為 TEST
	unset($_SESSION["user"]);
	//取消名為 user 的 session
	session_unset();
	//取消所有 session
	session_destroy();
	//刪除所有session關聯資料
?>