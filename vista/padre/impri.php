<?php
	include 'plantilla.php';
	require '../config/conexion2.php';
	
	$query = "SELECT docente.coddoce, docente.dnido, docente.nomprof, docente.apeprof, docente.fech_naci, docente.sex, docente.email, docente.telef, docente.direc,docente.dia_ing, docente.foto, docente.nomusu, docente.passw,  docente.estado, docente.fecha_registro FROM docente";
	$resultado = $mysqli->query($query);
	
	$pdf = new PDF();
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	$pdf->SetFillColor(232,232,232);
	$pdf->SetFont('Arial','B',12);
	$pdf->Cell(70,6,'dnido',1,0,'C',1);
	$pdf->Cell(20,6,'coddoce',1,0,'C',1);
	$pdf->Cell(70,6,'nomprof',1,1,'C',1);
	
	
	$pdf->SetFont('Arial','',10);
	
	while($row = $resultado->fetch_assoc())
	{
		$pdf->Cell(70,6,utf8_decode($row['dnido']),1,0,'C');
		$pdf->Cell(20,6,$row['coddoce'],1,0,'C');
		$pdf->Cell(70,6,utf8_decode($row['nomprof']),1,1,'C');
		
	$pdf->Output();
?>