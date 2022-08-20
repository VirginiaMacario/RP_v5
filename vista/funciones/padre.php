<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$query = $conexion->query("SELECT * FROM padres");


echo '<option value="0">Seleccione el padre</option>';
while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codpad']. '">' . $row['nompadr'] . '</option>' . "\n";
}
