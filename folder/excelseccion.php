<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=salon.xls');

	require_once('../vista/config/conexcion6.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM seccion";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Capacidad</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codsec']; ?></td>
					<td><?php echo $row['nomsec']; ?></td>
                    <td><?php echo $row['capacidad']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>