<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM clase");

echo '<option value="0">Seleccione la clase</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codclase']. '">' . $row['nomclase'] . '</option>' . "\n";
}



