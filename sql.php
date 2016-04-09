<?php
	$link=mysqli_connect("localhost","ner","nerner","ner");
	
	mysqli_query($link, "SET NAMES UTF8");
	
	$result=mysqli_query($link, "select * from ex1");
	
	$fields=mysqli_num_fields($result);
	$rows=mysqli_num_rows($result);
		
	echo $fields;
	echo mysqli_num_fields($result);
	echo "<br/>";
	echo $rows;
	echo mysqli_num_rows($result);
	
	
	echo "<br/>";
	echo "<br/>";
	$field=mysqli_fetch_assoc($result); 
	echo $field["t_name"];
	echo "<br/>";
	
	$field=mysqli_fetch_assoc($result);
	echo $field["t_name"];
	echo " ";
	echo $field["t_phone"];
	echo "<br/>";
	
	$row=mysqli_fetch_row($result);
	echo $row[1];
	echo "<br/>";
	
	$row=mysqli_fetch_row($result);
	echo $row[0];
 	//mysqli_close($link);
 	
 	

 	
 	mysqli_query($link, "INSERT INTO test(t_name) values ('xxx')");
 	mysqli_query($link, "UPDATE test SET t_name='xxx' where t_index=2");
 	mysqli_query($link, "DELETE FROM test where t_index=2");
?>