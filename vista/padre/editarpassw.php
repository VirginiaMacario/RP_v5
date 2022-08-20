<?php
	session_start();
	include_once('../config/db.php');;

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			
			$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
			

			$sql = "UPDATE padres SET password = '$password' WHERE codpad = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Contraseña actualizada correctamente' : 'No se puso actualizar contraseña';

		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar la conexión
		$database->close();
	}
	else{
		$_SESSION['message'] = 'Complete el formulario de edición';
	}

	header('location: ../../folder/padre.php');

?>