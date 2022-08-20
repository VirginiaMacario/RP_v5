<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Nuevo</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
				<form class="form-padding" method="POST"  action="recibir.php" role="form">
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="nombc" placeholder="Escribe aquí el nombre del sistema" required="" pattern="[a-zA-z0-9áéíóúÁÉÍÓÚñÑ ]{1,50}" maxlength="25" data-toggle="tooltip" data-placement="top" title="Escribe el nombre del sistema">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Nombre de la empresa</label>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="email" class="material-control tooltips-general" name="email" placeholder="Escribe aquí el correo del sistema" required=""  maxlength="55" data-toggle="tooltip" data-placement="top" title="Escribe el correo del sistema">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Correo de la empresa</label>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="sitio" placeholder="Escribe aquí el sitio del sistema" required=""  maxlength="55" data-toggle="tooltip" data-placement="top" title="Escribe el sitio del sistema">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Sitio de la empresa</label>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="telefo" placeholder="Escribe aquí el teléfono del sistema" required="" maxlength="9" data-toggle="tooltip" data-placement="top" title="Escribe el teléfono del sistema">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Teléfono de la empresa</label>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<input type="text" class="material-control tooltips-general" name="direcc" placeholder="Escribe aquí la dirección del sistema" required=""  maxlength="25" data-toggle="tooltip" data-placement="top" title="Escribe la dirección del sistema">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Dirección de la empresa</label>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<span>Pais</span>
					<select class="material-control tooltips-general" name="pais" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
						<option value="">Pais</option>
						<option value="Perú">Perú</option>
						<option value="Ecuador">Ecuador</option>
					</select>
				</div>
				</div>
				
				<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					<span>Ciudad</span>
					<select class="material-control tooltips-general" name="ciudad" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
						<option value="">Ciudad</option>
						<option value="Piura">Piura</option>
						<option value="Castilla">Castilla</option>
					</select>
				</div>
				</div>
				<div class="col-xs-12">
				<p class="text-center">
					<button type="reset" class="btn btn-info" style="margin-right: 20px;"><i class="zmdi zmdi-roller"></i> &nbsp;&nbsp; Limpiar</button>
					<button type="submit" name="agregar" class="btn btn-primary"><i class="zmdi zmdi-floppy"></i> &nbsp;&nbsp; Guardar</button>
				</p> 
		   </div>
				
				
				</form>
				
				
			
            </div>

        </div>
    </div>
</div>
</div>