<?php
  require_once "../config/conexion4.php";

	$nombrea = $_POST['nombrea'];
	$apellidoa = $_POST['apellidoa'];
	$fecha_naci = $_POST['fecha_naci'];
	$genero = $_POST['genero'];
	$direccion = $_POST['direccion'];
	$usualu = $_POST['usualu'];	
	$codclase  = $_POST['cbxtema'];
	$codasig  = $_POST['cbxevento'];
	$codsec  = $_POST['codsec'];
	$foto = $_FILES['foto']['name'];

	$fechare=date('Y-m-d');	
	$estado = $_POST['estado'];
	

// Cargando el fichero en la carpeta "subidas"		
if( $nombrea!=null || $apellidoa!=null || $fecha_naci!=null || $genero!=null || $direccion!=null || $codclase!=null ||  $codasig!=null ||  $foto!=null || $usualu!=null || $fechare!=null || $estado!=null){


$sql = "INSERT INTO alumnos(nombrea,apellidoa,fecha_naci,genero,direccion,codclase,codasig,foto,usualu,fechare,estado,codpad,codsec,codgra)

VALUES ('$nombrea','$apellidoa','$fecha_naci','$genero','$direccion','$codclase','$codasig','$foto','$usualu','$fechare','$estado',1,'$codsec',1)";
		
   

	
	$query = $con->prepare( $sql );
	if ($query == false) {
	 print_r($con->errorInfo());
	 die ('Erreur prepare');
	}
	$sth = $query->execute();
	if ($sth == false) {
	 print_r($query->errorInfo());
	 die ('Erreur execute');
	}

}
header('Location: ../../folder/alumnos.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
  
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);


		?>		
   
  
   