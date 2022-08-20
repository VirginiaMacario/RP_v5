<?php
	require ('conexion.php');
	
	$codasig = $_POST['codasig'];
	
	$query = "SELECT codsec, nomsec FROM seccion WHERE codasig = '$codasig' ORDER BY nomsec";
	$resultado=$mysqli->query($query);

	$html= "<option value='0'>Seleccionar </option>";

	while($row = $resultado->fetch_assoc())
	{
		$html.= "<option value='".$row['codsec']."'>".$row['nomsec']."</option>";
	}
	echo $html;
?>