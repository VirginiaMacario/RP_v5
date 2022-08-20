
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
	
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.11/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.11/js/jquery.dataTables.js"></script>
<style type="text/css">
#progressbar div
{
  background-color: #99cc66;
   width: 50%; 
   height: 20px;
   border-radius: 10px;

}
</style>
	
</head>
<body onload="startTime()">
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
                    <!--<li><a href="../mensajes/mostrar.php"><i class="zmdi zmdi-favorite zmdi-hc-fw"></i>&nbsp;&nbsp; Mensajes</a></li>-->
                    <li><a href="../../folder/grado.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Eventos</a></li>
					<!--<li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Usuarios</a></li>-->
					<li><a href="../../folder/docente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Instructores</a></li>
					<li><a href="../../folder/alumnos.php"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Participantes</a></li>
					<!--<li><a href="../../folder/libro.php"><i class="zmdi zmdi-dns zmdi-hc-fw"></i>&nbsp;&nbsp; Libreria</a></li>-->
					<li><a href="../calendario/mostrar.php"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Calendario</a></li>
					<li><a href="../reporte/mostrar.php"><i class="zmdi zmdi-sort-amount-desc zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					<li><a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Contabilidad</a></li>
					<!--<li><a href="../../folder/anoaca.php"><i class="zmdi zmdi-graphic-eq zmdi-hc-fw"></i>&nbsp;&nbsp; Ajustes</a></li>-->
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
              <li role="presentation" class="active"><a href="#">Estadísticas</a></li>
              <!--<li role="presentation"><a href="#">Bitácora</a></li>
               <li role="presentation"><a href="#">Reportes y fichas</a></li>-->
            </ul>
        </div>
		
		 <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="../../assets/images/chart.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido al área de estadísticas, aquí puedes ver las diferentes estadísticas.
                </div>
            </div>
        </div>

	<!---------------------------------------------------------------------->
		
       
	<div class="container-fluid">
            <h2 class="text-center all-tittles">Reportes de asistencias de alumnos</h2>
			
			<?php
				require_once "../config/DBconect.php";
			  $sql = "SELECT COUNT(*) total FROM asisalum";
			  $result = $db->query($sql); //$pdo sería el objeto conexión
			  $total = $result->fetchColumn();

		?>
		
			
			<button type="button" class="btn btn-secundary" style="margin-top:-30px; margin-left:30px;"><i class="zmdi zmdi-print zmdi-hc-fw"></button></i>
			
			
			
			<div class="progress" id="progressbar">
			  <div style="width: <?php echo $total; ?>%;"><span><?php echo round($total,2); ?>%</span></div>
			</div>
		
		         <div class="container-fluid">
				 
				 
            <div class="media media-hover">
			<div class="div-table">
			   <table id="grid" class="table table-striped table-bordered dt-responsive nowrap">
			  <thead>
			  <tr>
				<th>#</th>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				 <th>Fecha de registro</th>
				
				
			  </tr>
			</thead>
			
			<tbody class="BusquedaRapida">
			<?php
			//incluimos el fichero de conexion
			include_once('../config/dbconect.php');

	$database = new Connection();
	$db = $database->open();
	try{	
		$sql = 'SELECT asisalum.codasis, alumnos.nombrea, alumnos.apellidoa, alumnos.foto, asisalum.presen, asisalum.fechare  FROM asisalum INNER JOIN alumnos ON asisalum.codalum=alumnos.codalum';
		foreach ($db->query($sql) as $row) {
			?>
			<tr>
				<td><?php echo $row['codasis']; ?></td>
				<td><?php  echo "<img src='../../assets/images/imagenes/".$row['foto']."'width='50px'"; ?></td>
				
				
				<td><?php echo $row['nombrea']; ?></td>
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
			
           
        </div>
		
			
	</div>
	
	<div class="container-fluid">
		<h2 class="text-center all-tittles">Reportes de asistencias de instructores</h2>
		<button type="button" class="btn btn-secundary" style="margin-top:-30px; margin-left:30px;"><i class="zmdi zmdi-print zmdi-hc-fw"></button></i>
	<?php
				require_once "../config/DBconect.php";
			  $sql = "SELECT COUNT(*) total FROM asisdoc";
			  $result = $db->query($sql); //$pdo sería el objeto conexión
			  $total1 = $result->fetchColumn();

		?>
	
	<div class="progress" id="progressbar">
			  <div style="width: <?php echo $total1; ?>%;"><span><?php echo round($total1,2); ?>%</span></div>
	</div>
	
	 <div class="container-fluid">
            <div class="media media-hover">
			<div class="div-table">
			 <table id="grid3" class="table table-striped table-bordered dt-responsive nowrap">
			  <thead>
			  <tr>
				<th>#</th>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				 <th>Fecha de registro</th>
				
				
			  </tr>
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
				
				
				<td><?php echo $row['nomprof']; ?> &nbsp;<?php echo $row['apeprof']; ?>  </td>
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
	 <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>-->
	 
	<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido2').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script>  

<script type="text/javascript">
$(document).ready(function () {
   (function($) {
       $('#FiltrarContenido1').keyup(function () {
            var ValorBusqueda = new RegExp($(this).val(), 'i');
            $('.BusquedaRapida tr').hide();
             $('.BusquedaRapida tr').filter(function () {
                return ValorBusqueda.test($(this).text());
              }).show();
                })
      }(jQuery));
});
</script>  
	<script type="text/javascript">
 $(document).ready(function () {
        $('#grid').DataTable();
    });
	</script>	
	
	<script type="text/javascript">
 $(document).ready(function () {
        $('#grid2').DataTable();
    });
	</script>	
	
	<script type="text/javascript">
 $(document).ready(function () {
        $('#grid3').DataTable();
    });
	</script>	
	 
</body>
</html>