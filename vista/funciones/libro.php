<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM libro");


echo '<option value="0">Seleccione el libro</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codlibro']. '">' . $row['titu'] . '</option>' . "\n";
}
