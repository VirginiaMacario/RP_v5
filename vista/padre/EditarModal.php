<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="file_<?php echo $va['codpad']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" enctype="multipart/form-data" action="../vista/padre/EditarRegistro.php?id=<?php echo $va['codpad']; ?>">
			
			
				<div class="row form-group">
						<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Foto</label></div>
						<div class="col-12 col-md-9">
						<img src="../assets/images/imagenes/<?php echo $va['foto']; ?>" alt="" style=""width="190px" height="200px"><p style="margin-left:60px;">Antigua</p>

						<input type="file" class="form-control" name="foto" id="imagen" maxlength="256" placeholder="Imagen">
			<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
			<img src="" width="150px" height="120px" id="imagenmuestra">
						<br />
						
						
						</div>
						
						
			</div>
				
				
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="fa fa-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
