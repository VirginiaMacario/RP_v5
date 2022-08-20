<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM alumnos");


echo '<option value="0">Seleccione el estudiante</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codalum']. '">' . $row['nombrea'] . '</option>' . "\n";
}
