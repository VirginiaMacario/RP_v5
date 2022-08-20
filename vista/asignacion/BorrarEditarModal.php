

<div class="modal fade" id="ver_<?php echo $va['codasig']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Eventos</h4></center>
					<br>
				<img src ="../assets/images/portapapeles.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre del evento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="tituloa" value="<?php echo $va['tituloa']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fechaini" value="<?php echo $va['fechaini']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Hora de inicio:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fecha_limite" value="<?php echo $va['horaini']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Hora de fin:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fecha_limite" value="<?php echo $va['fecha_limite']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Instructor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomprof" value="<?php echo $va['nomprof']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Tema:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomclase" value="<?php echo $va['nomclase']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Salón:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomsec" value="<?php echo $va['nomsec']; ?>">
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
<div class="modal fade" id="delete_<?php echo $va['codasig']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['tituloa'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/asignacion/BorrarRegistro.php?id=<?php echo $va['codasig']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>