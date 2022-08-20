<?php
	session_start();
	include_once('../config/db.php');

	if(isset($_POST['editar'])){
		$database = new Connection();
		$db = $database->open();
		try{
			$id = $_GET['id'];
			$tituloa = $_POST['tituloa'];
            $fechaini = $_POST['fechaini'];
            $horaini = $_POST['horaini'];
            $fecha_limite = $_POST['fecha_limite'];
            $codclase = $_POST['codclase'];
            $codsec = $_POST['codsec'];
            $coddoce = $_POST['coddoce'];
			
			$sql = "UPDATE asignacion SET tituloa = '$tituloa', fechaini = '$fechaini', horaini = '$horaini', fecha_limite = '$fecha_limite',  
            codclase = '$codclase', codsec = '$codsec', coddoce = '$coddoce' WHERE codasig = '$id'";
    

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


	header('Location: ../../folder/asignacion.php'); 

?>

<?php
   require_once "../config/conexion4.php";
   $tituloa = $_POST['tituloa'];
   $fechaini = $_POST['fechaini'];
			

 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);



		?>