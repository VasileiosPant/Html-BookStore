<?php

$status=$_POST["status"]; //we get the status

if($status=="ins"){ 





	
	$au=$_POST["au"];// we get what user wrote 
	$tl=$_POST["tl"];
	$gn=$_POST["gn"];
	$pr=$_POST["pr"];
	
	
	if($au == ""||$tl==""||$gn==""||$pr==""){
		alert( "Fill all the form");
	}else{
	
	
	$link=mysqli_connect("127.0.0.1:50634","azure","6#vWHD_$");// connect to db.
	mysqli_select_db($link,"mysql");
	
	if (mysqli_connect_errno())
	{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	$res=mysqli_query($link,"INSERT INTO books (author, title, genre, price)
VALUES ('$au', '$tl', '$gn','$pr')"); // insert what user wrote into database.
	var json = '{"result":true,"count":1}',
			obj = JSON.parse(json);

			alert(obj.result);
	}
	
}
	







?>