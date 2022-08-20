
<?php
  $database = new PDO("mysql:host=localhost;dbname=rpv2","root","");
	if(isset($_POST['btnsave'])) {
		$codlibro = $_POST['codlibro'];
		$codalum = $_POST['codalum'];
		$finicio = $_POST['finicio'];
		$ffinal = $_POST['ffinal'];
		$estado = $_POST['estado'];
		
		$can = $_POST['can'];
		$fere = date('Y-m-d');
		$fecha_registro = date('Y-m-d');
		
		
	$sentencia=$database ->query("SELECT codlibro, canti FROM rpv2.libro WHERE codlibro = '".$codlibro."'");
	if($row=$query->fetch(PDO::FETCH_ASSOC($sentencia))){
		$new_cant=$row['canti'];
		$sentencia =$database ->query("UPDATE rpv2.libro SET new_cant =  '". $canti . "' - 1 WHERE codlibro = '".$codlibro."'");
		
		}else{
			$sentencia = $database ->query("INSERT INTO rpv2.pres VALUES (NULL,'$codlibro','$codalum','$finicio','$ffinal','$estado',new_cant,'$fere','$fecha_registro');");
		
		}
		
		
	
	
	
	//$sentencia = $database->query("INSERT INTO rpv2.pres VALUES //(NULL,'$codlibro','$codalum','$finicio','$ffinal','$estado','$can','$fere','$fecha_registro');");
	
	
		
		
		
		
		
		
		
		
	}

?>		
   
  
   