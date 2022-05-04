<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "monitoreo";

$connection = mysqli_connect($host,$user,$pass,$db);

if($connection){
   echo "";
}else{
	echo "Fail";
}


?>