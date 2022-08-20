<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" type="image/x-icon" href="../assets/images/marianogalvez2.png" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
<link rel="stylesheet" type="text/css "href="../assets/css/estilo.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
<title>Acceso al sistema</title>
</head>
<body>

<?php

require_once "config/DBconect.php";

if(isset($_REQUEST['btn_register'])) //compruebe el nombre del botón "btn_register" y configúrelo
{
	$username	= $_REQUEST['txt_username'];	//input nombre "txt_username"
	$email		= $_REQUEST['txt_email'];	//input nombre "txt_email"
$password	= /*password_hash*/($_REQUEST['txt_password']/*, PASSWORD_BCRYPT*/);
	$role		= $_REQUEST['txt_role'];	//seleccion nombre "txt_role"
		
	if(empty($username)){
		$errorMsg[]="Ingrese nombre de usuario";	//Compruebe input nombre de usuario no vacío
	}
	else if(empty($email)){
		$errorMsg[]="Ingrese email";	//Revisar email input no vacio
	}
	else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errorMsg[]="Ingrese email valido";	//Verificar formato de email
	}
	else if(empty($password)){
		$errorMsg[]="Ingrese password";	//Revisar password vacio o nulo
	}
	else if(strlen($password) < 6){
		$errorMsg[] = "Password minimo 6 caracteres";	//Revisar password 6 caracteres
	}
	else if(empty($role)){
		$errorMsg[]="Seleccione rol";	//Revisar etiqueta select vacio
	}
	else
	{	
		try
		{	
			$select_stmt=$db->prepare("SELECT username, email FROM mainlogin 
										WHERE username=:uname OR email=:uemail"); // consulta sql
			$select_stmt->bindParam(":uname",$username);   
			$select_stmt->bindParam(":uemail",$email);      //parámetros de enlace
			$select_stmt->execute();
			$row=$select_stmt->fetch(PDO::FETCH_ASSOC);	
			if($row["username"]==$username){
				$errorMsg[]="Usuario ya existe";	//Verificar usuario existente
			}
			else if($row["email"]==$email){
				$errorMsg[]="Email ya existe";	//Verificar email existente
			}
			
			else if(!isset($errorMsg))
			{
				$insert_stmt=$db->prepare("INSERT INTO mainlogin(username,email,password,role) VALUES(:uname,:uemail,:upassword,:urole)"); //Consulta sql de insertar			
				$insert_stmt->bindParam(":uname",$username);	
				$insert_stmt->bindParam(":uemail",$email);	  		//parámetros de enlace 
				$insert_stmt->bindParam(":upassword",$password);
				$insert_stmt->bindParam(":urole",$role);
				
				if($insert_stmt->execute())
				{
					$registerMsg="Registro exitoso: Esperar página de inicio de sesión"; //Ejecuta consultas 
					header("refresh:2;login.php"); //Actualizar despues de 2 segundo a la portada
				}
			}
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
		}
	}
}

?>
	
	
<canvas id="svgBlob"></canvas>


			
		
			


<div class="position">




 <form class="container" method="post">
    <div class="centering-wrapper">
      <div class="section1 text-center">
	  
        <div class="primary-header">FUNDIPG</div>
        
		<div class="col-lg-10">
		
		<?php
		if(isset($errorMsg))
		{
			foreach($errorMsg as $error)
			{
			?>
				
				
		<div class="w3-container w3-red">
			  <h3>INCORRECTO!</h3>
			  <p><?php echo $error; ?>.</p>
		</div>
            <?php
			}
		}
		if(isset($registerMsg))
		{
		?>
			
			
			<div class="w3-panel w3-green">
  <h3>EXITO!</h3>
  <p> <?php echo $registerMsg; ?>.</p>
</div>  

        <?php
		}
		?> 
	</div>
		
		
		
		
        <div class="input-position">
		
		  <div class="form-group">
            <h5 class="input-placeholder" id="email-txt">Usuario<span class="error-message" id="email-error"></span></h5>
	    <input type="text" required="true" name="txt_username"  placeholder="user" class="form-style"  autocomplete="off" style="margin-bottom: 20px;">
	    <i class="input-icon uil uil-at"></i>
	  </div>
	  
	  <div class="form-group">
            <h5 class="input-placeholder" id="email-txt">Correo<span class="error-message" id="email-error"></span></h5>
	    <input type="email" required="true"  name="txt_email" placeholder="user@gmail.com"  class="form-style" id="logemail" autocomplete="off" style="margin-bottom: 20px;">
	    <i class="input-icon uil uil-at"></i>
	  </div>	
          <div class="form-group">
            <h5 class="input-placeholder" id="pword-txt">Contraseña<span class="error-message" id="password-error"></span></h5>
	    <input type="password" required="true" name="txt_password"  placeholder="***********" maxlength="8"  class="form-style"  autocomplete="on">
	    <i class="input-icon uil uil-lock-alt"></i>
		</div>
		
		<div class="row form-group" style="display:none;">
						<div class="col col-md-3"><label for="select" class=" form-control-label">Estado</label></div>
						<div class="col-12 col-md-9">
							<select name="txt_role"  class="form-control">
							
								<option value="admin">admin</option>
								
							</select>
						</div>
		</div>
	</div>
		
        <div class="password-container"></div>
		
          <div class="btn-position">
         <!--  <a href="#" class="btn">Acceder</a> -->
		 <input type="submit" name="btn_register" class="btn btn-primary btn-block" value="Acceder">
        </div>
      </div>
	  
      <div class="horizontalSeparator"></div>
	  
      <!--<div class="qr-login">
        <div class="qr-container">-->
         <!-- <img class="logo" src="https://cdn.discordapp.com/attachments/742854174324031528/771346778356318248/ChallengerCarl_2.png"/> --> 
		 <img src="../assets/images/marianogalvez2.png" style="width:30%">
         <!-- <canvas id="qr-code"></canvas>-->
        </div>
       
		
       
      </div>
	  
	  
    </div>
  </form>
  </div>
  
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
</body>
</html>
