<?php
	
	require '../assets/phpqrcode/qrlib.php';
	
	$dir = '../assets/temp/';
	
	if(!file_exists($dir))
		mkdir($dir);
	
	$filename = $dir.'test.png';
	
	$tamanio = 15;
	$level = 'H';
	$frameSize = 1;
	$contenido = 'http://www.codigosdeprogramacion.com';

	QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
	
	echo '<img src="'.$filename.'" />';

?>