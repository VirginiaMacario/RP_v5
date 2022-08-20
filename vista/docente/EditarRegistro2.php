<?php
error_reporting( ~E_NOTICE );	
require_once '../config/Conexion.php';

if(isset($_GET['edit_id']) && !empty($_GET['edit_id']))
{
	$id = $_GET['edit_id'];
	$stmt_edit = $DB_con->prepare('SELECT foto FROM docente WHERE coddoce =:uid');
	$stmt_edit->execute(array(':uid'=>$id));
	$edit_row = $stmt_edit->fetch(PDO::FETCH_ASSOC);
	extract($edit_row);
}
else
{
	header('Location: ../../folder/docente.php'); 
}	

if(isset($_POST['editar']))
{
	
		
	$imgFile = $_FILES['user_image']['name'];
	$tmp_dir = $_FILES['user_image']['tmp_name'];
	$imgSize = $_FILES['user_image']['size'];
				
	if($imgFile)
	{
		$upload_dir = '../../assets/images/imagenes/'; // upload directory	
		$imgExt = strtolower(pathinfo($imgFile,PATHINFO_EXTENSION)); // get image extension
		$valid_extensions = array('jpeg', 'jpg', 'png', 'gif'); // valid extensions
		$userpic = rand(1000,1000000).".".$imgExt;
		if(in_array($imgExt, $valid_extensions))
		{			
			if($imgSize < 1000000)
			{
				unlink($upload_dir.$edit_row['foto']);
				move_uploaded_file($tmp_dir,$upload_dir.$userpic);
			}
			else
			{
				$errMSG = "Su archivo es demasiado grande mayor a 1MB";
			}
		}
		else
		{
			$errMSG = "Solo archivos JPG, JPEG, PNG & GIF .";		
		}	
	}
	else
	{
		// if no image selected the old image remain as it is.
		$userpic = $edit_row['foto']; // old image from database
	}	
					
	
	// if no error occured, continue ....
	if(!isset($errMSG))
	{
		$stmt = $DB_con->prepare('UPDATE docente SET foto=:upic WHERE coddoce=:uid');
		
		$stmt->bindParam(':upic',$userpic);
		$stmt->bindParam(':uid',$id);
			
		if($stmt->execute()){
			?>
<script>
			alert('Archivo editado correctamente ...');
			window.location.href='../../folder/docente.php';
			</script>
<?php
		}
		else{
			$errMSG = "Los datos no fueron actualizados !";
		}		
	}						
}	
?>