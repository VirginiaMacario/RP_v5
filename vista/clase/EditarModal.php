<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="file_<?php echo $va['codclase']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" enctype="multipart/form-data" action="../vista/clase/EditarRegistro.php?id=<?php echo $va['codclase']; ?>">
		

			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Nombre del tema:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="nomclase" id="imagen" placeholder="Nombre" value="<?php echo $va['nomclase']; ?>"> 
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Información:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="info" id="imagen" placeholder="Informacion" value="<?php echo $va['info']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span> Cancelar</button>
                <button type="submit" name="editar" class="btn btn-success"><span class="fa fa-check"></span> Actualizar Ahora</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->