<?php

require 'connect.php';
session_start();



$usuario = $_POST['username'];
$clave = $_POST['pass'];

$query= "SELECT COUNT(*) as contar from admin where username = '$usuario' and passw = '$clave'";

$consulta = mysqli_query($connection,$query);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
  $_SESSION['username'] = $usuario;
  header("location: ../index.php");
}else{
	echo "datos erroneos";
}
?>