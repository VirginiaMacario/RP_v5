<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM docente");


echo '<option value="0">Seleccione el docente</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['coddoce']. '">' . $row['nomprof'] . '</option>' . "\n";
}
