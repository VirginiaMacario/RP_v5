<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=instructor.xls');

	require_once('../vista/config/conexcion6.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM docente";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Email</th>
		<th>Telefono</th>
        <th>Estado</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['coddoce']; ?></td>
					<td><?php echo $row['nomprof']; ?></td>
                    <td><?php echo $row['apeprof']; ?></td>
					<td><?php echo $row['email']; ?></td>
					<td><?php echo $row['telef']; ?></td>
					<td><?php echo $row['estado']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>