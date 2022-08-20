

<div class="modal fade" id="ver_<?php echo $va['codsec']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Salón</h4></center>
				<br>
				<img src ="../assets/images/aula.png" style="max-width: 220px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label" style="position:relative; top:7px;">Nombre del salón:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomsec" value="<?php echo $va['nomsec']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label" style="position:relative; top:7px;">Capacidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="capacidad" value="<?php echo $va['capacidad']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-5">
						<label class="control-label" style="position:relative; top:7px;">Ubicación:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomclase" value="<?php echo $va['ubicacion']; ?>">
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
<div class="modal fade" id="delete_<?php echo $va['codsec']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<br>
				<img src ="../assets/images/aula.png" style="max-width: 110px; margin-left:220px;">
				<h2 class="text-center"><?php echo $va['nomsec'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/seccion/BorrarRegistro.php?id=<?php echo $va['codsec']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>