

<div class="modal fade" id="ver_<?php echo $va['coddoce']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Instructores</h4></center>
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>			
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomprof" value="<?php echo $va['nomprof']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="apeprof" value="<?php echo $va['apeprof']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nacimiento:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fech_naci" value="<?php echo $va['fech_naci']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sexo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="sex" value="<?php echo $va['sex']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Correo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="email" value="<?php echo $va['email']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="telef" value="<?php echo $va['telef']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="direc" value="<?php echo $va['direc']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Ingreso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="dia_ing" value="<?php echo $va['dia_ing']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-10">
						<img src="../assets/images/imagenes/<?php echo $va['foto']; ?>" alt="" style=""width="150px" height="150px">
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
<div class="modal fade" id="delete_<?php echo $va['coddoce']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['nomprof'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/docente/BorrarRegistro.php?id=<?php echo $va['coddoce']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>