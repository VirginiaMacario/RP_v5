<?php
  
  require_once "../vista/config/conexion1.php";
  $sentencia = $bd->prepare("SELECT docente.coddoce, docente.dnido, docente.nomprof, docente.apeprof, docente.fech_naci, docente.sex, docente.email, docente.telef, docente.direc,docente.dia_ing, docente.foto, docente.nomusu, docente.passw,  docente.estado, docente.fecha_registro FROM docente WHERE coddoce = ?;");
$sentencia->execute([$coddoce]);
            $persona = $sentencia->fetch(PDO::FETCH_OBJ);

	//Agregamos la libreria para genera códigos QR
	require "../assets/phpqrcode/qrlib.php";    
	
	//Declaramos una carpeta temporal para guardar la imagenes generadas
	$dir = '../assets/temp/';
	
	//Si no existe la carpeta la creamos
	if (!file_exists($dir))
        mkdir($dir);
	
        //Declaramos la ruta y nombre del archivo a generar
	$filename = $dir.'test.png';
 
        //Parametros de Condiguración
	
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 4; //Tamaño en blanco
	
	
	 $dnia = "$persona->dnido ";
	
	
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($dnia, $filename, $level, $tamaño, $framSize);
	
        //Mostramos la imagen generada
	echo '<img src="'.$dir.basename($filename).'" /><hr/>';  
	
?>