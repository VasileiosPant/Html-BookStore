<?php

$status=$_GET["status"];// we get the status 

if($status=="disp")
{
	$au=$_GET["au"];

$link=mysqli_connect("127.0.0.1:50634","azure","6#vWHD_$","mysql"); // connect to db.
mysqli_select_db($link,"mysql");
$res=mysqli_query($link,"select * from books where title like '%$au%'"); // select from books the title what the user wrote 

$rows = array();
while($r = mysqli_fetch_assoc($res)) {
    $rows[] = $r;
}
$json = json_encode($rows,JSON_PRETTY_PRINT );
echo "<pre>" . $json . "</pre>"; // shows the json of what we found to table 







}




















?>