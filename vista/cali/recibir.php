<?php
session_start();
include_once('../config/db.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO cali (codano,codper,coddoce,codclase,codsec,codalum,praccali,examparc,indiv,fechare) VALUES (:codano,:codper,:coddoce,:codclase,:codsec,:codalum,:praccali,:examparc,:indiv,:fechare)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
$_SESSION['message'] = ( $stmt->execute(array(':codano' => $_POST['codano'],':codper' => $_POST['codper'],':coddoce' => $_POST['coddoce'],':codclase' => $_POST['codclase'],':codsec' => $_POST['codsec'],':codalum' => $_POST['codalum'],':praccali' => $_POST['praccali'],':examparc' => $_POST['examparc'],':indiv' => $_POST['indiv'],':fechare' => date('Y-m-d'))) ) ? 'Calificación guardado correctamente' : 'Algo salió mal. No se puede agregar miembro';	
	
	}
	catch(PDOException $e){
		$_SESSION['message'] = $e->getMessage();
	}

	//cerrar la conexion
	$database->close();
}

else{
	$_SESSION['message'] = 'Llene el formulario';
}

header('location: mostrar.php');
	
?>