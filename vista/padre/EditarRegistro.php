<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			
			$foto = $_FILES['foto']['name'];
			

			$sql = "UPDATE padres SET foto = '$foto'  WHERE codpad = '$id'";
			//if-else statement in executing our query
			$_SESSION['message'] = ( $db->exec($sql) ) ? 'Imagen actualizada correctamente' : 'No se puso actualizar foto';

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


	header('Location: ../../folder/padre.php'); 

?>

<?php
   require_once "../config/conexion4.php";
   $foto = $_FILES['foto'];

 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);



		?>