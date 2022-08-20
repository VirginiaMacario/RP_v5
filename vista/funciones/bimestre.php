<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM periodo");

echo '<option value="0">Seleccione el bimestre</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codper']. '">' . $row['nompe'] . '</option>' . "\n";
}



