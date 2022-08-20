<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$el_continente = $_POST['continente'];

$query = $conexion->query("SELECT * FROM clase WHERE coddoce = $el_continente");

echo '<option value="0">Seleccione la clase</option>';

while ( $row = $query->fetch_assoc() )
{
	echo '<option value="' . $row['codclase']. '">' . $row['nomclase'] . '</option>' . "\n";
}
