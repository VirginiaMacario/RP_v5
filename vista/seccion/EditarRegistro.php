<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nomsec = $_POST['nomsec'];
            $capacidad = $_POST['capacidad'];
            $ubicacion = $_POST['ubicacion'];
			
			$sql = "UPDATE seccion SET nomsec = '$nomsec', capacidad = '$capacidad', ubicacion = '$ubicacion' WHERE codsec = '$id'";
    

			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Datos actualizados correctamente' : 'No se pudo actualizar';

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


	header('Location: ../../folder/seccion.php'); 

?>

<?php
   require_once "../config/conexion4.php";
   $tituloa = $_POST['tituloa'];
   $fechaini = $_POST['fechaini'];
			

 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);


