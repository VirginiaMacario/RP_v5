<?php
	
	$mysqli = new mysqli('localhost', 'root', '', 'rp_v2');
	
	if($mysqli->connect_error){
		
		die('Error en la conexion' . $mysqli->connect_error);
		
	}
?>