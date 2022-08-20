
 <?php
	$database = new PDO("mysql:host=localhost;dbname=rpv2","root","");
	if(!empty($_POST['btnsave'])){
		$codlibro=$_POST['codlibro'];
		$codalum=$_POST['codalum'];
		$finicio=$_POST['finicio'];
		$ffinal=$_POST['ffinal'];
		$estado=$_POST['estado'];
		$can = $_POST['can'];
		$fere = date('Y-m-d');
		
		
	$database->query("INSERT INTO rpv2.pres VALUES (NULL,'$codlibro','$codalum','$finicio','$ffinal','$estado','$can','$fere')");
	echo "ok";
	}
	
?>


		

