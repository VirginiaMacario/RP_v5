

<div class="modal fade" id="ver_<?php echo $va['codpad']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Docentes</h4></center>
				<br>
				<img src ="../assets/images/user05.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">DNI:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="dni" value="<?php echo $va['dni']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nompadr" value="<?php echo $va['nompadr']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Apellido:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="apepa" value="<?php echo $va['apepa']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Profesión:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="propa" value="<?php echo $va['propa']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sexo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="sexo" value="<?php echo $va['sexo']; ?>">
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
						<input type="text" class="form-control" readonly="" name="direcc" value="<?php echo $va['direcc']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="celular" value="<?php echo $va['celular']; ?>">
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
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="usuaP" value="<?php echo $va['usuaP']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Estado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="estado" value="<?php echo $va['estado']; ?>">
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
<div class="modal fade" id="delete_<?php echo $va['codpad']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['nompadr'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/padre/BorrarRegistro.php?id=<?php echo $va['codpad']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>