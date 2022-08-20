<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['id'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$sql = "DELETE FROM events WHERE id = '".$_POST['id']."'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Evento Borrado' : 'Hubo un error al borrar el evento';
		}
		catch(PDOException $e){
			$_SESSION['message'] = $e->getMessage();
		}

		//Cerrar conexión
		$database->close();

	}
	else{
		$_SESSION['message'] = 'Seleccionar miembro para eliminar primero';
	}

	header("location:mostrar.php");

?>