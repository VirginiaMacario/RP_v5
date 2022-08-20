<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=eventos.xls');

	require_once('../vista/config/conexcion6.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM asignacion";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Evento</th>
		<th>Fecha</th>
		<th>Hora inicial</th>
		<th>Hora final</th>
		<th>Tema</th>
        <th>Salon</th>
        <th>Instructor</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codasig']; ?></td>
					<td><?php echo $row['tituloa']; ?></td>
                    <td><?php echo $row['fechaini']; ?></td>
					<td><?php echo $row['horaini']; ?></td>
					<td><?php echo $row['fecha_limite']; ?></td>
					<td><?php echo $row['coddoce']; ?></td>
					<td><?php echo $row['codclase']; ?></td>
                    <td><?php echo $row['codsec']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>