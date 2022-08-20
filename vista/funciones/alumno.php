<?php

$conexion = mysqli_connect("localhost","root","","rpv2");

$sec = $_POST['secciones'];

$query = $conexion->query("SELECT * FROM alumnos WHERE codsec = $sec");

echo '<option value="0">Seleccione el alumno</option>';

while ( $row = $query->fetch_assoc() )
{

	echo '<option value="' . $row['codalum']. '">' . $row['nombrea'] . '</option>' . "\n";
}
