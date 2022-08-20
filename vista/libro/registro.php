
<?php
  require_once "../config/conexion4.php";

	$codigol = $_POST['codigol'];
	$titu = $_POST['titu'];
	$canti = $_POST['canti'];
	$subt = $_POST['subt'];
	$aut = $_POST['aut'];
	
	$foto = $_FILES['foto']['name'];
	$archi = $_FILES['archi']['name'];
	
	
	
	
	
	$anopu = $_POST['anopu'];
	$edito = $_POST['edito'];
	$idiom = $_POST['idiom'];
	$pagi = $_POST['pagi'];
	$pes = $_POST['pes'];
	$codgra = $_POST['codgra'];	
	$esta = $_POST['esta'];	

	$fecreg=date('Y-m-d');	
	

// Cargando el fichero en la carpeta "subidas"		
if( $codigol!=null||  $titu!=null || $canti!=null || $subt!=null || $aut!=null || $foto!=null || $archi!=null || $anopu!=null || $edito!=null ||  $idiom!=null ||  $pagi!=null ||  $pes!=null ||  $codgra!=null || $esta!=null || $fecreg!=null  ){


     $sql = "INSERT INTO libro(codigol, titu,canti,subt,aut,foto,archi,anopu,edito,idiom,pagi,pes,codgra,esta,fecreg)
			VALUES ('$codigol','$titu','$canti','$subt','$aut','$foto','$archi','$anopu','$edito','$idiom','$pagi','$pes','$codgra','$esta','$fecreg')";
		
   

	
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
header('Location: ../../folder/libro.php');



   ?>
   <?php
   require_once "../config/conexion4.php";
   $archi = $_FILES['archi'];
   $foto = $_FILES['foto'];
 
  

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($archi['tmp_name'], "../../assets/images/imagenes/".$archi['name']);
move_uploaded_file($foto['tmp_name'], "../../assets/images/imagenes/".$foto['name']);


		?>		
   
  
   