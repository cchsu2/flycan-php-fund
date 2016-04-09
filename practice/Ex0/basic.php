<?php
// 這是 PHP 程式開頭，單行註解可以使用雙斜線或是如結尾使用井字號。

$here = "flycan";
/* 宣告變數名稱使用錢字號開頭，除了第一個字不能使用數字外，皆可使用英文大小寫、數字及底線組成，
 * 變數名稱大小寫有別，並且注意不可以衝突PHP的關鍵字。
 */

define("HERE","flycan");
//定義常數時，不需要加錢字號。

echo "$here<br/>";
//雙引號內變數會編譯，使用echo指令在頁面上呈現內容。
echo "<br/>";

echo '$here<br/>';
//單引號內皆視為純文字。
echo "<br/>";

echo HERE;
//echo常數不需要加引號，否則會被視為純文字。
echo "<br/>";

/*
	include "xxx.php";
	//引用同目錄下的 xxx.php。
	echo "include<br/>";
	
	include_once "./xxx.php";
	//只引入一次同目錄下的 xxx.php。
	echo "include_once<br/>";
	
	require "../xxx.php";
	//引用上一層目錄下的xxx.php。
	echo "require<br/>";
	
	require_once "/xxx.php";
	//只引入一次根目錄下的xxx.php。
	echo "require_once<br/>";
*/
#這是 PHP 程式結尾。
?>