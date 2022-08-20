<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="file_<?php echo $va['codsec']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" enctype="multipart/form-data" action="../vista/seccion/EditarRegistro.php?id=<?php echo $va['codsec']; ?>">
			
			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Nombre del salón:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="nomsec" id="imagen" placeholder="Nombre" value="<?php echo $va['nomsec']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Capacidad:</label></div>
				<div class="col-12 col-md-9">
				<input type="int" class="form-control" name="capacidad" id="imagen" placeholder="Capacidad" value="<?php echo $va['capacidad']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
                </div>
            </div>
			
            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Ubicación:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="ubicacion" id="imagen" placeholder="Unicacion" value="<?php echo $va['ubicacion']; ?>">
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