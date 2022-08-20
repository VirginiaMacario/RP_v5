<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM anoaca");

echo '<option value="0">Seleccione el año académico</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codano']. '">' . $row['nomano'] . '</option>' . "\n";
}



