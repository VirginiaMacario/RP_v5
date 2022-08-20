<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM libro WHERE codlibro = $el_continente");



while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codlibro']. '">' . $row['canti'] . '</option>' . "\n";
}
