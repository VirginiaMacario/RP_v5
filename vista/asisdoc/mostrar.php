<?php
	//include("conexion.php");
	$database = new PDO("mysql:host=localhost;dbname=rpv2","root","");
	if(isset($_GET['filter'])){
		$filter = $_GET['filter'];
		$datos = $database->query("SELECT docente.coddoce, docente.dnido, docente.nomprof, docente.apeprof, docente.fech_naci, docente.sex, docente.email, docente.telef, docente.direc,docente.dia_ing, docente.foto, docente.nomusu, docente.passw,  docente.estado, docente.role,docente.fecha_registro FROM docente
		WHERE docente.nomprof='$filter' ORDER BY coddoce ASC")->fetchAll(PDO::FETCH_OBJ);					
	}else{
		$datos = $database->query("SELECT docente.coddoce, docente.dnido, docente.nomprof, docente.apeprof, docente.fech_naci, docente.sex, docente.email, docente.telef, docente.direc,docente.dia_ing, docente.foto, docente.nomusu, docente.passw,  docente.estado, docente.role,docente.fecha_registro FROM docente ORDER BY coddoce ASC")->fetchAll(PDO::FETCH_OBJ);
	}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel administrativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="../../assets/images/icono.svg">
  
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
  
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
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
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
					header("location: ../vista/estudiante/estudiante_portada.php");
				}
				
				if(isset($_SESSION['admin_login']))
				{
				?>
				
						 
				
					
				

    <div class="navbar-lateral full-reset">
        <div class="visible-xs font-movile-menu mobile-menu-button"></div>
        <div class="full-reset container-menu-movile nav-lateral-scroll">
            <div class="logo full-reset all-tittles">
                <i class="visible-xs zmdi zmdi-close pull-left mobile-menu-button" style="line-height: 55px; cursor: pointer; padding: 0 10px; margin-left: 7px;"></i> 
                ricardo palma
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset" style="padding: 10px 0; color:#fff;">
                <figure>
                    <img src="../../assets/images/graduation.svg" alt="Biblioteca" class="img-responsive center-box" style="width:55%;">
                </figure>
                <p class="text-center" style="padding-top: 15px;">Ricardo Palma</p>
            </div>
            <div class="nav-lateral-divider full-reset"></div>
            <div class="full-reset nav-lateral-list-menu">
                <ul class="list-unstyled">
                    <li><a href="../admin/admin_portada.php"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>&nbsp;&nbsp; Tablero</a></li>
                    
                    <li><a href="../mensajes/mostrar.php"><i class="zmdi zmdi-favorite zmdi-hc-fw"></i>&nbsp;&nbsp; Mensajes</a></li>
                    <li><a href="../../folder/grado.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Académico</a></li>
					
					
					<li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Usuarios</a></li>
					<li><a href="../../folder/docente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Docentes</a></li>
					
					
					<li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Herramientas</a></li>
					
					<li><a href="../../folder/libro.php"><i class="zmdi zmdi-dns zmdi-hc-fw"></i>&nbsp;&nbsp; Libreria</a></li>
					
					<li><a href="../calendario/mostrar.php"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Calendario</a></li>
					<li><a href="../reporte/mostrar.php"><i class="zmdi zmdi-sort-amount-desc zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					<li><a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Contabilidad</a></li>
					<li><a href="../../folder/anoaca.php"><i class="zmdi zmdi-graphic-eq zmdi-hc-fw"></i>&nbsp;&nbsp; Ajustes</a></li>
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
                <li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar libro">
                    <i class="zmdi zmdi-search"></i>
                </li>
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
              <li role="presentation"><a href="../folder/grado.php">Grado</a></li>
              <li role="presentation"><a href="../../folder/tema.php">Tema</a></li>
              <li role="presentation"><a href="../../folder/clase.php">Clase</a></li>
              <li role="presentation"><a href="../../folder/seccion.php">Secciones</a></li>
			   <li role="presentation"><a href="../../folder/plan.php">Plan </a></li>
			    <li role="presentation"><a href="../../folder/asignacion.php">Asignación</a></li>
				<li role="presentation" class="active"><a href="#">Asistencia</a></li>
            </ul>
        </div>
		
		 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../../assets/images/gradu.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección para registrar el horario del docente, debes de llenar todos los campos del siguiente formulario para poder registrarlo.
					 
                </div>
            </div>
        </div>
		<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 lead">
				<ol class="breadcrumb">
				  <li class="active"><a href="../../folder/asisalum.php">Asistencia de alumnos</a></li>
				  <li class="active">Asistencia de profesores</li>
				</ol>
			</div>
		</div>
	</div>
       
<?php 
	
	if(isset($_SESSION['message'])){
		?>
		
		
		 <div class="col-sm-12">
		 
                <div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong> <?php echo $_SESSION['message']; ?>.</strong> 
        </div> 
            </div>
			
			
		<?php

		unset($_SESSION['message']);
		
	}
	
	if(isset($_SESSION['message'])){
		?>
		<div class="alert alert-info text-center" style="margin-top:20px;">
			<?php echo $_SESSION['message']; ?>
		</div>
		<?php

		unset($_SESSION['message']);
	}
		
	
?>
<div class="input-group mb-5" style="margin-right: -10em; min-width: 1000px;">
	  <div class="input-group-prepend">
		<span class="input-group-text" id="basic-addon1"></span>
	  </div>
	  <input id="FiltrarContenido" type="text" class="form-control" placeholder="Buscar profesores..." aria-label="Alumnos" aria-describedby="basic-addon1">
</div>
	<div class="container-fluid">
           
			
	<div class="container">
	<hr>
		
		
		<div class="col-md-4">
		  <div class="form-group">
		  <label for="fecha_inicio">Fecha</label>
			<input type="date" value="<?php echo date("Y-m-d");?>" class="form-control fecha_inicio" name="fecha_inicio">
		  </div>
		</div>
		
		<div class="col-md-4" style="margin-top:30px;">
		<div class="form-group">
			<a  id="addnewbtn"  data-target="#userModal" title="Mostrar" data-backdrop="false"  class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span></a>
			<?php include('mostrarModal.php'); ?>
		</div>
		</div>
		<p>Control de asistencia de  <strong>Profesores</strong></p>
		<table class="table table-striped">
			<thead>
					<th>#</th>
					<th>Foto</th>
					<th>Nombre</th>
					<th>Asistencia</th>
					<th>Fecha</th>
					
					
					<th>Acción</th>
			</thead>
			<tbody class="BusquedaRapida">
					<?php
			//incluimos el fichero de conexion
			include_once('../config/dbconect.php');

			$database = new Connection();
			$db = $database->open();
			try{	
				$sql = 'SELECT asisdoc.codasidoc, docente.coddoce, docente.nomprof, docente.apeprof, docente.foto, asisdoc.presen, asisdoc.fechare, asisdoc.fecha_create  FROM asisdoc INNER JOIN docente ON asisdoc.coddoce= docente.coddoce';
				foreach ($db->query($sql) as $row) {
					?>
					<tr>
						<td><?php echo $row['codasidoc']; ?></td>
						<td><?php  echo "<img src='../../assets/images/imagenes/".$row['foto']."'width='50px'"; ?></td>
						<td><?php echo $row['nomprof']; ?></td>
						
						<td>
						
						 <?php 
							   if($row ['presen'] == 'Presente')
								   echo " <span class='label label-success'> Presente";
							   
							   else 
								   if($row ['presen'] == 'Tarde')
							   echo "<span class='label label-warning'> Tarde";
						     else 
								   if($row ['presen'] == 'Ausente')
							   echo "<span class='label label-danger'> Ausente";
								   
							   ?>
						
						</td>
						<td><?php echo $row['fechare']; ?></td>
					
						<td>
		<a href="#edit_<?php echo $row['coddoce']; ?>" title="Editar" data-backdrop="false" class="btn btn-primary btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span></a>
						<?php include('BorrarEditarModal.php'); ?>		
						</td>
						
					</tr>
					<?php 
				}
			}
			catch(PDOException $e){
				echo "Hubo un problema en la conexión: " . $e->getMessage();
			}

			//Cerrar la Conexion
			$database->close();

		?>
			</tbody>
		</table>
	</div>
		
	</div>

        <div class="modal fade" tabindex="-1" role="dialog" id="ModalHelp">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center all-tittles">ayuda del sistema</h4>
                </div>
                <div class="modal-body">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore dignissimos qui molestias ipsum officiis unde aliquid consequatur, accusamus delectus asperiores sunt. Quibusdam veniam ipsa accusamus error. Animi mollitia corporis iusto.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> &nbsp; De acuerdo</button>
                </div>
            </div>
          </div>
        </div>
        
    </div>
	 <script src="../../assets/js/reloj.js"></script> 
	 
	 <!--------- FUNCIONES ------------------------->
	 
	  <script src="../../assets/js/funciones/functions11.js"></script> 
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
	 
	<script type="text/javascript">

		$(document).on('change', '#asistencia', function(){
			let datoasistencia = $(this).parents('tr').find('#asistencia').val();
			let coddoce = $(this).parents('tr').find('td').eq(0).text();
			let fechare = $('.fecha_inicio').val();
			if (datoasistencia != "0") {
				$.ajax({
					url: 'enviardatos2.php',
					type: 'POST',
					data: {op: 'tomarasistencia', datoasistencia: datoasistencia, coddoce: coddoce, fechare: fechare}
				}).done((res) => {
					
					Swal.fire({
					  position: 'top-end',
					  icon: 'success',
					  title: 'Asistencia tomada',
					  showConfirmButton: false,
					  timer: 1500
					});
				});
			}
		});

	</script> 
	<script src="../../assets/js/alerta.js"></script>
	 	<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script> 

<script>
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
</body>
</html>