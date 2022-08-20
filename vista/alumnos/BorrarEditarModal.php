

<div class="modal fade" id="ver_<?php echo $va['codalum']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				
                <center><h4 class="modal-title" id="myModalLabel">Participantes</h4></center>
				
				<br>
				<img src ="../assets/images/user03.png" style="max-width: 110px; margin-left:220px;">
				
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>

				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="nombrea" value="<?php echo $va['nombrea']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="apellidoa" value="<?php echo $va['apellidoa']; ?>">
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de nacimiento:</label>
					</div>
					<div class="col-sm-14">
						<input type="date" class="form-control" readonly="" name="fecha_naci" value="<?php echo $va['fecha_naci']; ?>">
					</div>
				</div>

				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="direccion" value="<?php echo $va['direccion']; ?>">
					</div>
				</div>
				
			
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del tema:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="nomclase" value="<?php echo $va['nomclase']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Nombre del salón:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="nomsec" value="<?php echo $va['nomsec']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-7">
						<label class="control-label" style="position:relative; top:7px;">Fecha de registro:</label>
					</div>
					<div class="col-sm-14">
						<input type="text" class="form-control" readonly="" name="fechare" value="<?php echo $va['fechare']; ?>">
					</div>
				</div>
			
				
			
            </div> 
			</div>
			
			
			
            <div class="modal-footer">
                
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $va['codalum']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de borrar el registro?</p>
				<br>
				<img src ="../assets/images/user03.png" style="max-width: 110px; margin-left:220px;">
				<h2 class="text-center"><?php echo $va['nombrea'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/alumnos/BorrarRegistro.php?id=<?php echo $va['codalum']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>