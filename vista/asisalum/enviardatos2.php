<?php
	$database = new PDO("mysql:host=localhost;dbname=rpv2","root","");
	if(isset($_POST['op'])) {
		$datoasistencia = $_POST['datoasistencia'];
		$codalum = $_POST['codalum'];
		
		$fechare = $_POST['fechare'];
		$date = date('Y-m-d');
		
		
		
		$database->query("INSERT INTO rpv2.asisalum VALUES(NULL,'$codalum','$datoasistencia','$fechare','$date')");
		echo "ok";
	}
	?>