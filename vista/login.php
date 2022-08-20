<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/marianogalvez2.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css "href="../assets/css/estilo.css">
<link rel="stylesheet" type="text/css "href="../assets/css/select.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link rel="stylesheet" href="../assets/css/loader.css"> 
<title>Acceso al sistema</title>
</head>
<body>
 
<canvas id="svgBlob"></canvas>

<div class="position">

<?php
require_once 'config/DBconect.php';
session_start();
if(isset($_SESSION["admin_login"]))	//Condicion admin
{
	header("location: admin/admin_portada.php");	
}
if(isset($_SESSION["personal_login"]))	//Condicion personal
{
	header("location: personal/personal_portada.php"); 
}
if(isset($_SESSION["usuarios_login"]))	//Condicion Usuarios
{
	header("location: usuarios/usuarios_portada.php");
}

if(isset($_REQUEST['btn_login']))	
{
	$email		=$_REQUEST["txt_email"];	//textbox nombre "txt_email"
	$password	=$_REQUEST["txt_password"];	//textbox nombre "txt_password"
	$role		=$_REQUEST["txt_role"];		//select opcion nombre "txt_role"
		
	if(empty($email)){						
		$errorMsg[]="Por favor ingrese Email";	//Revisar email
	}
	else if(empty($password)){
		$errorMsg[]="Por favor ingrese Password";	//Revisar password vacio
	}
	else if(empty($role)){
		$errorMsg[]="Por favor seleccione rol ";	//Revisar rol vacio
	}
	else if($email AND $password AND $role)
	{
		try
		{
			$select_stmt=$db->prepare("SELECT email,password,role FROM mainlogin
										WHERE
										email=:uemail AND password=:upassword AND role=:urole"); 
			$select_stmt->bindParam(":uemail",$email);
			$select_stmt->bindParam(":upassword",$password);
			$select_stmt->bindParam(":urole",$role);
			$select_stmt->execute();	//execute query
					
			while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))	
			{
				$dbemail	=$row["email"];
				$dbpassword	=$row["password"];
				$dbrole		=$row["role"];
			}
			
			
			if($email!=null AND $password!=null AND $role!=null)	
			{
				if($select_stmt->rowCount()>0)
				{
					if($email==$dbemail and $password==$dbpassword and $role==$dbrole)
					{
						switch($dbrole)		//inicio de sesión de usuario base de roles
						{
							case "admin":
								$_SESSION["admin_login"]=$email;			
								$loginMsg="Admin: Inicio sesión con éxito";	
								header("refresh:3;admin/admin_portada.php");	
								break;
								
							/*case "personal";
								$_SESSION["personal_login"]=$email;				
								$loginMsg="Personal: Inicio sesión con éxito";		
								header("refresh:3;personal/personal_portada.php");	
								break;
								
							case "usuarios":
								$_SESSION["usuarios_login"]=$email;				
								$loginMsg="Usuario: Inicio sesión con éxito";	
								header("refresh:3;usuarios/usuarios_portada.php");		
								break;*/
								
							default:
								$errorMsg[]="correo electrónico o contraseña";
						}
					}
					else
					{
						$errorMsg[]="correo electrónico o contraseña";
					}
				}
				else
				{
					$errorMsg[]="correo electrónico o contraseña";
				}
			}
			else
			{
				$errorMsg[]="correo electrónico o contraseña";
			}
		}
		catch(PDOException $e)
		{
			$e->getMessage();
		}		
	}
	else
	{
		$errorMsg[]="correo electrónico o contraseñ";
	}
}

?>

	
  <form class="container"method="post"  role="form">
    <div class="centering-wrapper">
      <div class="section1 text-center">
        <div class="primary-header">FUNDIPG</div>
		<div class="col-lg-10">
		
		
		<!--- ----------------------------------------------->
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				<div class="w3-container w3-red">
					<strong><?php echo $error; ?></strong>
				</div>
            <?php
			}
		}
		
		if(isset($loginMsg))
		{
		?>
			<div class="w3-panel w3-green">
				<strong>ÉXITO ! <?php echo $loginMsg; ?></strong>
			</div>
        <?php
		}
		?> 
		
		
		
	</div>
        
        <div class="input-position">
	  <div class="form-group">
            <h5 class="input-placeholder" id="email-txt">Correo<span class="error-message" id="email-error"></span></h5>
	    <input type="email" required="true" name="txt_email" class="form-style" id="logemail" autocomplete="off" style="margin-bottom: 20px;">
	    <i class="input-icon uil uil-at"></i>
	  </div>	
          <div class="form-group">
            <h5 class="input-placeholder" id="pword-txt">Contraseña<span class="error-message" id="password-error"></span></h5>
	    <input type="password" required="true" name="txt_password" class="form-style"  autocomplete="on">
	    <i class="input-icon uil uil-lock-alt"></i>
		</div>
		
		
		<div class="form-group">
            <h5 class="input-placeholder" >Rol<span class="error-message"></span></h5>
			<div class="select">
			<select name="txt_role" id="slct">
			<!--	 <option selected disabled>Seleccione el rol</option>-->
				 <option value="admin">Administrador</option>
          <!--<option value="personal">Personal</option>
          <option value="usuarios">Usuarios</option>-->
			  </select>
			</div>
	    
	 		</div>
		
		
		
        </div>
		
        <div class="password-container"><a href="#" class="link">¿Ólvidaste tu contraseña?</a></div>
		
          <div class="btn-position">
         <!-- <a href="#" class="btn">Acceder</a> -->
		  
		  <input type="submit" name="btn_login" class="btn btn-success btn-block" value="Acceder">
        </div>
		
		
		
      </div>
      <div class="horizontalSeparator"></div>
      <!--<div class="qr-login">
        <div class="qr-container">-->
         <!-- <img class="logo" src="https://cdn.discordapp.com/attachments/742854174324031528/771346778356318248/ChallengerCarl_2.png"/> --> 
		 <img src="../assets/images/marianogalvez2.png" style="width:30%">
          <!--<canvas id="qr-code"></canvas>-->
        </div>
		<div class="password-container"><a href="registrate.php" class="link" style="margin-left:560px;">Crear Usuario</a></div>
      </div>
    </div>
  </form>
  

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
<script src="../assets/js/login.js"></script>
<script>
$(document).ready(function () {
  $('#mostrar_contrasena').click(function () {
    if ($('#mostrar_contrasena').is(':checked')) {
      $('#contrasena').attr('type', 'text');
    } else {
      $('#contrasena').attr('type', 'password');
    }
  });
});
</script> 

<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loader-page").css({visibility:"hidden",opacity:"0"})
  }, 200);
     
});
</script>
</body>
</html>
