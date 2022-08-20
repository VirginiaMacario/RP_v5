<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			//$foto = $_POST['foto'];
			$nomprof = $_POST['nomprof'];
			$apeprof = $_POST['apeprof'];
			$fech_naci = $_POST['fech_naci'];
			$email = $_POST['email'];
			$telef = $_POST['telef'];
			$direc = $_POST['direc'];
			$foto = $_FILES['foto']['name'];
			
			$sql = "UPDATE docente SET nomprof = '$nomprof', apeprof = '$apeprof', fech_naci = '$fech_naci', email = '$email',
			telef = '$telef', direc = '$direc', foto = '$foto'  WHERE coddoce = '$id'";
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


	header('Location: ../../folder/docente.php'); 

?>

<?php
   require_once "../config/conexion4.php";
   $foto = $_FILES['foto'];

 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);



		?>