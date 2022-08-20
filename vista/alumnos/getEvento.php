<?php
	
	require ('conexion.php');
	
	$codclase = $_POST['codclase'];
	
	$queryM = "SELECT codasig, tituloa FROM asignacion WHERE codclase = '$codclase' ORDER BY tituloa";
	$resultadoM = $mysqli->query($queryM);
	
	$html= "<option value='0'>Seleccionar Evento</option>";
	
	while($rowM = $resultadoM->fetch_assoc())
	{
		$html.= "<option value='".$rowM['codasig']."'>".$rowM['tituloa']."</option>";
	}
	
	echo $html;
?>		