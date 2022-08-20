
<?php
	
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$presen = $_POST['presen'];
			

			$sql = "UPDATE asisalum SET presen = '$presen'  WHERE codasis = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Asistencia actualizado correctamente' : 'No se puso actualizar la asistencia o ingrese la asistencia';

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

	header('location: ../../folder/asisalum.php');

?>