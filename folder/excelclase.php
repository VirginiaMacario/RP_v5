<?php
	header('Content-type:application/xls');
	header('Content-Disposition: attachment; filename=tema.xls');

	require_once('../vista/config/conexcion6.php');
	$conn=new Conexion();
	$link = $conn->conectarse();

	$query="SELECT * FROM clase";
	$result=mysqli_query($link, $query);
?>

<table border="1">
	<tr style="background-color:red;">
		<th>Codigo</th>
		<th>Nombre</th>
		<th>Informacion</th>
	</tr>
	<?php
		while ($row=mysqli_fetch_assoc($result)) {
			?>
				<tr>
					<td><?php echo $row['codclase']; ?></td>
					<td><?php echo $row['nomclase']; ?></td>
                    <td><?php echo $row['info']; ?></td>
				</tr>	

			<?php
		}

	?>
</table>