

<div class="modal fade" id="ver_<?php echo $row['codconf']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Configuración</h4></center>
				<br>
				<img src ="../../assets/images/confige.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
			
		
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Nombre de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nombc" value="<?php echo $row['nombc']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Correo de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="email" value="<?php echo $row['email']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Sitio de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="sitio" value="<?php echo $row['sitio']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Teléfono de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="telefo" value="<?php echo $row['telefo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Dirección de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="direcc" value="<?php echo $row['direcc']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">País de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="pais" value="<?php echo $row['pais']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Ciudad de la empresa:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="ciudad" value="<?php echo $row['ciudad']; ?>">
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
<div class="modal fade" id="delete_<?php echo $row['codconf']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar sistema de la empresa</h4></center>
				<br>
				<img src ="../../assets/images/buse.png" style="max-width: 110px; margin-left:220px;">
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				
				<h2 class="text-center"><?php echo $row['nombc']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
                <a href="BorrarRegistro.php?id=<?php echo $row['codconf']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>