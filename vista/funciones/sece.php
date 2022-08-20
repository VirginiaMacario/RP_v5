<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$pais = $_POST['paises'];

$query = $conexion->query("SELECT * FROM seccion WHERE codclase = $pais");

echo '<option value="0">Seleccione seccion</option>';

while ( $row = $query->fetch_assoc() )
{

	echo '<option value="' . $row['codsec']. '">' . $row['nomsec'] . '</option>' . "\n";
}
