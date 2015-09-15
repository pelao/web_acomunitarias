<?php 
include_once 'conexion.php';
$variables = $_REQUEST;
$junta = 1;
$imei = $_REQUEST['imei'];
$direccion = $_REQUEST['direccion'];

$query =  $mysqli->query("Insert into celular values(null,'$junta','$imei','$direccion')");
if ($query) {
	return 1;
}
else{
	return 0;
}

 ?>