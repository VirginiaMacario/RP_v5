

<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel administrativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="../../assets/images/icono.svg">
    <script src="../../assets/js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="../../assets/css/sweet-alert.css">
    <link rel="stylesheet" href="../../assets/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="../../assets/css/normalize.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <script src="../../assets/js/modernizr.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../../assets/js/main.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<style>
	 .loading  {
		 position: fixed;
		 left: 0px;
		 top: 0px;
		 width: 100%;
		 height: 100%;
		 z-index: 9999;
		 background: url('../../assets/images/Loading_2.gif') 50% 50% no-repeat rgb(249,249,249);
		opacity: .8; }
	</style>
</head>
<body onload="startTime()">
<div class="loading"></div>
<?php
				session_start();

				if(!isset($_SESSION['admin_login']))	
				{
					header("location: ../login.php");  
				}

				if(isset($_SESSION['personal_login']))	
				{
					header("location: ../docente/docente_portada.php");	
				}

				if(isset($_SESSION['usuarios_login']))	
				{
					header("location: ../estudiante/estudiante_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
				
						 
				
					
				

    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                FUNDIPG
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../../assets/images/graduation.svg" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">FUNDIPG</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../admin/admin_portada.php"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>&nbsp;&nbsp; Tablero</a></li>
                    <!--<li><a href="#"><i class="zmdi zmdi-favorite zmdi-hc-fw"></i>&nbsp;&nbsp; Mensajes</a></li>-->
                    <li><a href="../../folder/asignacion.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Eventos</a></li>
					<li><a href="../../folder/docente.php"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Instructores</a></li>
					<!--<li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Herramientas</a></li>-->
					<li><a href="../../folder/alumnos.php"><i class="zmdi zmdi-dns zmdi-hc-fw"></i>&nbsp;&nbsp; Participantes</a></li>
					<!--<li><a href="../calendario/mostrar.php"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Calendario</a></li>
					<li><a href="../reporte/mostrar.php"><i class="zmdi zmdi-sort-amount-desc zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					<li><a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Contabilidad</a></li>
					-<li><a href="#"><i class="zmdi zmdi-graphic-eq zmdi-hc-fw"></i>&nbsp;&nbsp; Ajustes</a></li>-->
                </ul>
            </div>
        </div>
    </div>
    <div class="content-page-container full-reset custom-scroll-containers">
        <nav class="navbar-user-top full-reset">
            <ul class="list-unstyled full-reset">
                <figure>
                   <img src="../../assets/images/user01.png" alt="user-picture" class="img-responsive img-circle center-box">
                </figure>
                <li style="color:#fff; cursor:default;">
                    <span class="all-tittles"><?php
						echo $_SESSION['admin_login'];
				}
				?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="../cerrar_sesion.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <!--<li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>-->
                <li  class="tooltips-general btn-help" data-placement="bottom" title="Ayuda">
                    <i class="zmdi zmdi-help-outline zmdi-hc-fw"></i>
                </li>
                <li class="mobile-menu-button visible-xs" style="float: left !important;">
                    <i class="zmdi zmdi-menu"></i>
                </li>
                <li class="desktop-menu-button hidden-xs" style="float: left !important;">
                    <i class="zmdi zmdi-swap"></i>
                </li>
            </ul>
        </nav>
		
		
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">
			  			   <?php 
					$hora= getdate();
					
					
					$a="Buen día";
					$b="Buenas tardes";
					$c="Buenas noches";

					if ($hora<12 =='$a'){
					echo "","<font color='green'>$a</font>";
					}
					
					elseif ($hora >=12 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					elseif ($hora <=16 =='$b')
					{
					echo "","<font color='green'>$b</font>";	
					}
					
					
					elseif ($hora >=19 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					elseif ( $hora >=24 =='$c')
					{
					echo "","<font color='green'>$c</font>";	
					}
					
					
					
					?> 
					
					
					
					
					<?php
			
					include_once('../config/db.php');

					$database = new Connection();
					$db = $database->open();
					try{	
						$sql = 'SELECT * FROM mainlogin WHERE id=1 ';
						foreach ($db->query($sql) as $row) {
							?>
						
								
								
							<?php 
						}
					}
					catch(PDOException $e){
						echo "Hubo un problema en la conexión: " . $e->getMessage();
					}

					$database->close();

						?>
					
					<small><?php echo $row['username']; ?>!</small>
					
					</h1>
					
					<h5>
					<strong>Tu último acceso es:</strong>
					<div id="date" style="margin-left:100px; margin-top:-15px;"></div>
					 
					</h5>
					
											<?php

				$user_agent = $_SERVER['HTTP_USER_AGENT'];

				function getBrowser($user_agent){

				if(strpos($user_agent, 'MSIE') !== FALSE)
				   return 'Internet explorer';
				 elseif(strpos($user_agent, 'Edge') !== FALSE) //Microsoft Edge
				   return 'Microsoft Edge';
				 elseif(strpos($user_agent, 'Trident') !== FALSE) //IE 11
					return 'Internet explorer';
				 elseif(strpos($user_agent, 'Opera Mini') !== FALSE)
				   return "Opera Mini";
				 elseif(strpos($user_agent, 'Opera') || strpos($user_agent, 'OPR') !== FALSE)
				   return "Opera";
				 elseif(strpos($user_agent, 'Firefox') !== FALSE)
				   return 'Mozilla Firefox';
				 elseif(strpos($user_agent, 'Chrome') !== FALSE)
				   return 'Google Chrome';
				 elseif(strpos($user_agent, 'Safari') !== FALSE)
				   return "Safari";
				 else
				   return 'No hemos podido detectar su navegador';


				}


				$navegador = getBrowser($user_agent);
				 
				echo "<strong>Navegador</strong>: ".$navegador;

						?>
							
				
            </div>
        </div>
		
		<div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <!--<li role="presentation"><a href="../../folder/docente.php">Docente</a></li>-->
              <li role="presentation" class="active"><a href="#">Participante</a></li>
			  <!--<li role="presentation"><a href="../../folder/padre.php">Padres</a></li>-->
          
            </ul>
        </div>
		
		 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../../assets/images/user03.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar un nuevo participante, debes de llenar todos los campos del siguiente formulario para poder registrarlo.
                </div>
            </div>
        </div>
       
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
				  <li><a href="../../folder/alumnos.php">Listado de participantes</a></li>&nbsp;&nbsp;
				  <li class="active">Nuevo participante</li>
				</ol>
			</div>
		</div>
	</div>
	
	<div class="container-fluid">
            <div class="container-flat-form">
                <div class="title-flat-form title-flat-blue">Agregar nuevo participante</div>
				
				
		<form class="form-padding" method="post" action="registro.php" enctype="multipart/form-data" role="form" autocomplete="off">
                    <div class="row">
                        <div class="col-xs-12">
                            <legend><i class="zmdi zmdi-flower"></i> &nbsp; Datos del participante</legend><br>
                        </div>
						
			<!--<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="dnia" placeholder="DPI" required="" maxlength="8" data-toggle="tooltip" data-placement="top" title="Escribe el dni">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>DPI</label>
				</div>
				
			</div>-->
			
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" placeholder="Escribe aquí el nombre del participante" name="nombrea"  required=""  data-toggle="tooltip" data-placement="top" title="Escribe nombre del alumno">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Nombre</label>
				</div>
			</div>
			
			
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="apellidoa" placeholder="Apellido" required=""  data-toggle="tooltip" data-placement="top" title="Escribe el apellido">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Apellido</label>
				</div>
				
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="date" class="material-control tooltips-general" placeholder="Escribe aquí la fecha" name="fecha_naci"  required="" data-toggle="tooltip" data-placement="top" title="Escribe la fecha">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Fecha de nacimiento</label>
				</div>
			</div>
			
			<!--<div class="col-xs-12">
		   <div class="group-material">
				<span>Padres</span>
				<select class="material-control tooltips-general" id="padre" name="codpad" data-toggle="tooltip" data-placement="top" title="Elige el padre a la que pertenece el alumno">
					<option value="" disabled="" selected="">Selecciona el padre</option>
					
				</select>
			</div>
		</div>-->
		
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<span>Género</span>
					<select class="material-control tooltips-general" name="genero" data-toggle="tooltip" data-placement="top" title="Elige el sexo">
						<option value="">Seleccione el género</option>
						<option value="Masculino">Masculino</option>
						<option value="Femenino">Femenino</option>
					</select>
				</div>
			</div>
			
			
			<!--<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<span>Grupo Sanguíneo</span>
					<select class="material-control tooltips-general" name="grupo_san" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
						<option value="">Seleccione el grupo</option>
						<option value="O+">O+</option>
						<option value="O-">O-</option>
					</select>
				</div>
			</div>-->
			
			
			
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="direccion" placeholder="Dirección" required=""  data-toggle="tooltip" data-placement="top" title="Escribe la dirección">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Dirección</label>
				</div>
				
			</div>
			
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="usualu" placeholder="Ingrese el correo" required=""  data-toggle="tooltip" data-placement="top" title="Escribe el usuario">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Correo</label>
				</div>
				
			</div>
			
			<!--<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<span>País</span>
					<select class="material-control tooltips-general" name="pais" data-toggle="tooltip" data-placement="top" title="Elige el pais">
						<option value="">Seleccione el pais</option>
						<option value="Perú">Perú</option>
						<option value="Ecuador">Ecuador</option>
					</select>
				</div>
			</div>-->
			
			<?php
				require ('conexion.php');

				$query = "SELECT codclase, nomclase FROM clase ORDER BY nomclase";
				$resultado=$mysqli->query($query);

			?>

		<script language="javascript" src="js/jquery-3.1.1.min.js"></script>
		
		<script language="javascript">
			$(document).ready(function(){
				$("#cbxtema").change(function () {

					$('#codsec').find('option').remove().end().append('<option value="whatever"></option>').val('whatever');
					
					$("#cbxtema option:selected").each(function () {
						codclase = $(this).val();
						$.post("getEvento.php", { codclase: codclase }, function(data){
							$("#cbxevento").html(data);
						});            
					});
				})
			});

			$(document).ready(function(){
				$("#cbxevento").change(function () {
					$("#cbxevento option:selected").each(function () {
						codasig = $(this).val();
						$.post("getSalon.php", { codasig: codasig }, function(data){
							$("#codsec").html(data);
						});            
					});
				})
			});
		</script>
			
		  <div class="col-xs-12">
			   <div class="group-material">
					<span>Tema</span>
					<select class="material-control tooltips-general" name="cbxtema" id="cbxtema" data-toggle="tooltip" data-placement="top" title="Elige el tema">
						
						<option value="0">Selecciona el tema</option>
							
							<?php while($row = $resultado->fetch_assoc()) { ?>
								<option value="<?php echo $row['codclase']; ?>"><?php echo $row['nomclase']; ?></option>
							<?php } ?>

					</select>
				</div>
		</div>

		<div class="col-xs-12">
			   <div class="group-material">
					<span>Evento</span>
					<select class="material-control tooltips-general" name="cbxevento" id="cbxevento" data-toggle="tooltip" data-placement="top" title="Elige el evento al que pertenece el participante">
						
						<option value="0">Selecciona el evento</option>
						
					</select>
				</div>
		</div>
		
		
		<div class="col-xs-12">
			   <div class="group-material">
					<span>Salón</span>
					<select class="material-control tooltips-general" name="codsec" id="codsec" data-toggle="tooltip" data-placement="top" title="Elige el salon al que pertenece el participante">
						
						<option value="0">Selecciona el Salon</option>
						
					</select>
				</div>
		</div>
		
		
			<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="file" class="material-control tooltips-general" id="exampleInputFile" name="foto" placeholder="Imagen" required=""  data-toggle="tooltip" data-placement="top" title="Imagen">
					<input type="hidden" name="MAX_FILE_SIZE" value="100000">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Imagen</label>
					<div id="preview"></div>
				</div>
				
			</div>
			
			
			
			
			
			<!--<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="password" class="material-control tooltips-general" name="password" placeholder="Ingrese contraseña" required=""  data-toggle="tooltip" data-placement="top" title="Escribe la contraseña">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Contraseña</label>
				</div>
				
			</div>
			
			<div class="col-xs-12 col-sm-6" style="display:none;">
				<div class="group-material">
					<span>Rol</span>
					<select class="material-control tooltips-general" name="role" data-toggle="tooltip" data-placement="top" title="Elige el rol">
						
						<option value="Alumnos">Alumnos</option>
					</select>
				</div>
			</div>-->
			
			
			
			<div class="col-xs-12 col-sm-6" style="display:none;">
				<div class="group-material">
					<span>Estado</span>
					<select class="material-control tooltips-general" name="estado" data-toggle="tooltip" data-placement="top" title="Elige el estado">
						
						<option value="1">Activo</option>
					</select>
				</div>
			</div>
			
			
			
			
			
	   <div class="col-xs-12">
			<p class="text-center">
				<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
				<button type="submit"  class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
				
				
			</p> 
	   </div>
					   
					   
                   </div>
                </form>
				
				
            </div>
        </div>
	
	
		
        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">Ayuda del sistema</h4>
                </div>
                <div class="modal-body">
					Elmer José Sut Salvador|
                    Virginia Amarilis Lux Macario|
                    Kan Kenech Federico Hernández Saquic|
                    Dámaris Yulissa Macario Ordóñez        
			</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        
    </div>
	 <script src="../../assets/js/reloj.js"></script> 
	 <script>
   document.getElementById("exampleInputFile").onchange = function(e) {
  // Creamos el objeto de la clase FileReader
  let reader = new FileReader();

  // Leemos el archivo subido y se lo pasamos a nuestro fileReader
  reader.readAsDataURL(e.target.files[0]);

  // Le decimos que cuando este listo ejecute el código interno
  reader.onload = function(){
    let preview = document.getElementById('preview'),
            image = document.createElement('img');

    image.src = reader.result;

    preview.innerHTML = '';
    preview.append(image);
  };
}
  </script>
  
  	<script src="../../assets/js/funciones/functions7.js"></script>
	<script src="../../assets/js/funciones/functions8.js"></script>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
 	 	 	<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>

</body>
</html>