<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=participante.xls');

	require_once('../vista/config/conexcion6.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM alumnos";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Clase</th>
		<th>Estado</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codalum']; ?></td>
					<td><?php echo $row['nombrea']; ?></td>
                    <td><?php echo $row['apellidoa']; ?></td>
					<td><?php echo $row['codclase']; ?></td>
					<td><?php echo $row['estado']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>