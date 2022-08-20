<?php
session_start();
include_once('../config/db.php');

if(isset($_POST['agregar'])){
	$database = new Connection();
	$db = $database->open();
	try{
		//hacer uso de una declaración preparada para prevenir la inyección de sql
		$stmt = $db->prepare("INSERT INTO bus (nombrcon,apecon,dnicon,direcc,celular,fijo,correo,sexo,tiposan,foto,placa,modelo,marca,color,ruta,hentr,hsali,imagen,fechare) VALUES (:nombrcon,:apecon,:dnicon,:direcc,:celular,:fijo,:correo,:sexo,:tiposan,:foto,:placa,:modelo,:marca,:color,:ruta,:hentr,:hsali,:imagen,:fechare)");
		//instrucción if-else en la ejecución de nuestra declaración preparada
		$_SESSION['message'] = ( $stmt->execute(array(':nombrcon' => $_POST['nombrcon'], ':apecon' => $_POST['apecon'], ':dnicon' => $_POST['dnicon'], ':direcc' => $_POST['direcc'], ':celular' => $_POST['celular'], ':fijo' => $_POST['fijo'], ':correo' => $_POST['correo'], ':sexo' => $_POST['sexo'], ':tiposan' => $_POST['tiposan'], ':foto' => $_POST['foto'], ':placa' => $_POST['placa'], ':modelo' => $_POST['modelo'], ':marca' => $_POST['marca'], ':color' => $_POST['color'], ':ruta' => $_POST['ruta'], ':hentr' => $_POST['hentr'], ':hsali' => $_POST['hsali'], ':imagen' => $_POST['imagen'],':fechare' => date('Y-m-d'),)) ) ? 'Bus guardado correctamente' : 'Algo salió mal. No se puede agregar el bus';	
	
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