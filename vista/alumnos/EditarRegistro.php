<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$nombrea = $_POST['nombrea'];
			$apellidoa = $_POST['apellidoa'];
			$fecha_naci = $_POST['fecha_naci'];
			$direccion = $_POST['direccion'];
			$codclase = $_POST['codclase'];
			$codasig = $_POST['codasig'];
			$codsec = $_POST['codsec'];
			$foto = $_FILES['foto']['name'];
			
			$sql = "UPDATE alumnos SET nombrea = '$nombrea', apellidoa = '$apellidoa', fecha_naci = '$fecha_naci', direccion = '$direccion', codclase = '$codclase',
			codasig = '$codasig', codsec = '$codsec', foto = '$foto'  WHERE codalum = '$id'";
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


	header('Location: ../../folder/alumnos.php'); 

?>

<?php
   require_once "../config/conexion4.php";
   $foto = $_FILES['foto'];

 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);



		?>