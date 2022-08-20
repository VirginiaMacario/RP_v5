<?php
	$database = new PDO("mysql:host=localhost;dbname=rpv2","root","");
	if(isset($_POST['op'])) {
		$datoasistencia = $_POST['datoasistencia'];
		$coddoce = $_POST['coddoce'];
		
		$fechare = $_POST['fechare'];
		$date = date('Y-m-d');
		
		
		
		$database->query("INSERT INTO rpv2.asisdoc VALUES(NULL,'$coddoce','$datoasistencia','$fechare','$date')");
		echo "ok";
	}
	?>