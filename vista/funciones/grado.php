<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM grado");

echo '<option value="0">Seleccione el grado</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codgra']. '">' . $row['nomgra'] . '</option>' . "\n";
}



