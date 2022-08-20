<?php
session_start();
include_once('../config/db.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO configge (nombc,email,sitio,telefo,direcc,pais,ciudad) VALUES (:nombc,:email,:sitio,:telefo,:direcc,:pais,:ciudad)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombc' => $_POST['nombc'], ':email' => $_POST['email'], ':sitio' => $_POST['sitio'], ':telefo' => $_POST['telefo'], ':direcc' => $_POST['direcc'], ':pais' => $_POST['pais'], ':ciudad' => $_POST['ciudad'])) ) ? 'Configuración guardado correctamente' : 'Algo salió mal. No se puede agregar la configuración';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: mostrar.php');
	
?>