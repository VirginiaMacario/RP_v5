
<?php
  require_once "../config/conexion4.php";

	$titu = $_POST['titu'];
	$descrp = $_POST['descrp'];
	$codclase = $_POST['codclase'];
	
	
	$archi = $_FILES['archi']['name'];
	
	$estado = $_POST['estado'];	

	
	

// Cargando el fichero en la carpeta "subidas"		
if( $titu!=null||  $descrp!=null || $codclase!=null || $archi!=null || $estado!=null){


     $sql = "INSERT INTO plan(titu, descrp,codclase,archi,estado)
			VALUES ('$titu','$descrp','$codclase','$archi','$estado')";
		
   

	
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
header('Location: ../../folder/plan.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
   $archi = $_FILES['archi'];
  
 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($archi['tmp_name'], "../../assets/images/imagenes/".$archi['name']);



		?>		
   
  
   