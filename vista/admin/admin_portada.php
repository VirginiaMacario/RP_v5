
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Panel administrativo</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" sizes="96x96" href="../../assets/images/marianogalvez2.png">
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
                    <li><a href="admin_portada.php"><i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i>&nbsp;&nbsp; Tablero</a></li>
                    <!--<li><a href="../mensajes/mostrar.php"><i class="zmdi zmdi-favorite zmdi-hc-fw"></i>&nbsp;&nbsp; Mensajes</a></li>-->
                    <li><a href="../../folder/asignacion.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>&nbsp;&nbsp; Eventos</a></li>
					<!--<li><a href="#"><i class="zmdi zmdi-accounts zmdi-hc-fw"></i>&nbsp;&nbsp; Usuarios</a></li>-->
					<li><a href="../../folder/docente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Instructores</a></li>
					<!--<li><a href="#"><i class="zmdi zmdi-wrench zmdi-hc-fw"></i>&nbsp;&nbsp; Herramientas</a></li>-->
					<li><a href="../../folder/alumnos.php"><i class="zmdi zmdi-dns zmdi-hc-fw"></i>&nbsp;&nbsp; Participantes</a></li>
					<!--<li><a href="../calendario/mostrar.php"><i class="zmdi zmdi-calendar-alt zmdi-hc-fw"></i>&nbsp;&nbsp; Calendario</a></li>
					<li><a href="../reporte/mostrar.php"><i class="zmdi zmdi-sort-amount-desc zmdi-hc-fw"></i>&nbsp;&nbsp; Reportes</a></li>
					<li><a href="#"><i class="zmdi zmdi-money-box zmdi-hc-fw"></i>&nbsp;&nbsp; Contabilidad</a></li>
					<li><a href="../../folder/anoaca.php"><i class="zmdi zmdi-graphic-eq zmdi-hc-fw"></i>&nbsp;&nbsp; Ajustes</a></li>-->
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
                    <span class="all-tittles">
					<?php
						echo $_SESSION['admin_login'];
				}
				?></span>
                </li>
                <li  class="tooltips-general exit-system-button" data-href="../cerrar_sesion.php" data-placement="bottom" title="Salir del sistema">
                    <i class="zmdi zmdi-power"></i>
                </li>
                <!--<li  class="tooltips-general search-book-button" data-href="searchbook.html" data-placement="bottom" title="Buscar">
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
		
		
		
        <section class="full-reset text-center" style="padding: 40px 0;">
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-face"></i></div>
                <div class="tile-name all-tittles">Administradores</div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM mainlogin";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
                       ?>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>

        <!-------------------->
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts"></i></div>
                <div class="tile-name all-tittles">Participantes</div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM alumnos";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
                       ?>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>

        <!--------------------->    
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-male-alt"></i></div>
                <div class="tile-name all-tittles">Instructores</div>
				
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM docente";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>
        
        <!---------------------->
			<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-book"></i></div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM seccion";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
                <div class="tile-name all-tittles">Salones</div>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>

        <!---------------------->

        <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts-list"></i></div>
				<?php
                              require_once "../config/DBconect.php";
                              $sql = "SELECT COUNT(*) total FROM asignacion";
                              $result = $db->query($sql); //$pdo sería el objeto conexión
                              $total = $result->fetchColumn();
			   ?>
                <div class="tile-name all-tittles">Eventos</div>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>
    
            <!--<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-calendar"></i></div>
                <div class="tile-name all-tittles">Calendario</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>
            
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-trending-up"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">Reportes y estadísticas</div>
                <div class="tile-num full-reset">&nbsp;</div>
            </article>-->

            
			
            <!--<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-accounts-list"></i></div>
                <div class="tile-name all-tittles">Padres</div>
				<?php
                //              require_once "../config/DBconect.php";
                //              $sql = "SELECT COUNT(*) total FROM padres";
                //              $result = $db->query($sql); //$pdo sería el objeto conexión
                //              $total = $result->fetchColumn();
			   ?>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>-->

            

            <!--<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-bookmark-outline"></i></div>
                <div class="tile-name all-tittles">categorías</div>
                <div class="tile-num full-reset">11</div>
            </article>-->

            <!--<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-assignment-account"></i></div>
                <div class="tile-name all-tittles">secciones</div>
				<?php
                //              require_once "../config/DBconect.php";
                //              $sql = "SELECT COUNT(*) total FROM seccion";
                //              $result = $db->query($sql); //$pdo sería el objeto conexión
                //              $total = $result->fetchColumn();
			   ?>
                <div class="tile-num full-reset"><?php echo  $total; ?></div>
            </article>-->

            <!--<article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-timer"></i></div>
                <div class="tile-name all-tittles">reservaciones</div>
                <div class="tile-num full-reset">10</div>
            </article>
            <article class="tile">
                <div class="tile-icon full-reset"><i class="zmdi zmdi-time-restore"></i></div>
                <div class="tile-name all-tittles" style="width: 90%;">devoluciones pendientes</div>
                <div class="tile-num full-reset">9</div>
            </article>-->

        </section>
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
$(window).on('load', function () {
      setTimeout(function () {
    $(".loading").css({visibility:"hidden",opacity:"0"})
  }, 500);
     
});
</script>
</body>
</html>