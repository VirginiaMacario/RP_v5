<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="ver_<?php echo $row['codper']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Periodos</h4></center>
				<br>
				<img src ="../../assets/images/peri.png" style="max-width: 110px; margin-left:220px;">
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nombre:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly  name="nompe" value="<?php echo $row['nompe']; ?>">
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
<div class="modal fade" id="delete_<?php echo $row['codper']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar periodo</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $row['nompe'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
                <a href="BorrarRegistro.php?id=<?php echo $row['codper']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> </a>
            </div>

        </div>
    </div>
</div>