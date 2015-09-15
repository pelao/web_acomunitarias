<?php 
$mysqli = new mysqli();
try {
	$conexion = $mysqli->real_connect('localhost' , 'daniel','', 'web_acomunitarias');	
} catch (Exception $e) {
	echo 'ha ocurrido un error al tratar de conectarse a la BD ',$e->getMessage();
}

//print_r($conexion);
 ?>