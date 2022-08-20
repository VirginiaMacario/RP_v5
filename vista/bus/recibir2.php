
<?php
  require_once "../config/conexion4.php";

	$nombrcon = $_POST['nombrcon'];
	$apecon = $_POST['apecon'];
	$dnicon = $_POST['dnicon'];
	$direcc = $_POST['direcc'];
	$celular = $_POST['celular'];
	$fijo = $_POST['fijo'];
	$correo = $_POST['correo'];
	$sexo = $_POST['sexo'];
	$tiposan = $_POST['tiposan'];
	
	
	$foto = $_FILES['foto']['name'];
	
	
	$placa = $_POST['placa'];
	$modelo = $_POST['modelo'];
	$marca = $_POST['marca'];
	$color = $_POST['color'];
	$ruta = $_POST['ruta'];
	$hentr = $_POST['hentr'];
	$hsali = $_POST['hsali'];
	
	$imagen = $_FILES['imagen']['name'];
	
	$fechare=date('Y-m-d');	
	
	

// Cargando el fichero en la carpeta "subidas"		
if($nombrcon!=null||  $apecon!=null || $dnicon!=null || $direcc!=null || $celular!=null || $fijo!=null || $correo!=null || $sexo!=null || $tiposan!=null ||  $foto!=null ||  $placa!=null ||  $modelo!=null || $marca!=null || $color!=null || $ruta!=null || $hentr!=null || $hsali!=null || $imagen!=null || $fechare!=null){


$sql = "INSERT INTO bus(nombrcon, apecon,dnicon,direcc,celular,fijo,correo,sexo,tiposan,foto,placa,modelo,marca,color,ruta,hentr,hsali,imagen,fechare)

VALUES ('$nombrcon','$apecon','$dnicon','$direcc','$celular','$fijo','$correo','$sexo','$tiposan','$foto','$placa','$modelo','$marca','$color','$ruta' ,'$hentr','$hsali','$imagen' ,'$fechare')";
		
   

	
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
header('Location: mostrar.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
  
   $foto = $_FILES['foto'];
   $imagen = $_FILES['imagen'];
 
  

// Cargando el fichero en la carpeta "subidas"

move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);
move_uploaded_file($imagen['tmp_name'], "../../assets/images/imagenes/".$imagen['name']);


		?>		
   
  
   