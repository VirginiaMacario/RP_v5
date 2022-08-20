<?php

// Conexion a la base de datos
require_once('../config/DBconect.php');

if (isset($_POST['title']) && isset($_POST['hini']) && isset($_POST['hfinal']) && isset($_POST['start']) && isset($_POST['end']) && isset($_POST['color'])){
	
	$title = $_POST['title'];
	$hini = $_POST['hini'];
	$hfinal = $_POST['hfinal'];
	$start = $_POST['start'];
	$end = $_POST['end'];
	$color = $_POST['color'];

	$sql = "INSERT INTO events(title,hini,hfinal, start, end, color) values ('$title', '$hini','$hfinal','$start', '$end', '$color')";
	
	echo $sql;
	
	$query = $db->prepare( $sql );
	if ($query == false) {
	 print_r($db->errorInfo());
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
