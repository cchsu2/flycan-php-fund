<?php
	setcookie("user","TEST",time()+60*60*24*30,"/","localhost");
	//設定名為 user 的 cookie，內容為 TEST ，持續時間30天。
	setcookie("user","",time()-60*60*24*30,"/","localhost");
	//將名為 user 的 cookie清空，並設定為逾時。
?>