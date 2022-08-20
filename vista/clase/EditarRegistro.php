<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="file_<?php echo $va['codasig']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" enctype="multipart/form-data" action="../vista/asignacion/EditarRegistro.php?id=<?php echo $va['codasig']; ?>">
			<?php
						require ('conexion.php');
						
						$query = "SELECT codsec, nomsec FROM seccion ORDER BY nomsec";
						$resultado=$mysqli->query($query);

						$query1 = "SELECT codclase, nomclase FROM clase ORDER BY nomclase";
						$resultado1=$mysqli->query($query1);

						$query2 = "SELECT coddoce, nomprof FROM docente ORDER BY nomprof";
						$resultado2=$mysqli->query($query2);
					?>

			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Nombre del evento:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="tituloa" id="imagen" placeholder="Imagen">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Fecha:</label></div>
				<div class="col-12 col-md-9">
				<input type="date" class="form-control" name="fechaini" id="imagen" placeholder="Fecha">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
                </div>
            </div>
			
            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Hora inicial:</label></div>
				<div class="col-12 col-md-9">
				<input type="time" class="form-control" name="horaini" id="imagen" placeholder="Hora">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
                </div>
            </div>

            <div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Hora final:</label></div>
				<div class="col-12 col-md-9">
				<input type="time" class="form-control" name="fecha_limite" id="imagen" placeholder="Hora">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
                </div>
            </div>

            <div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Tema:</span>
						<select class="material-control" name="codclase" id="class" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
							<option value="0">Selecciona el tema</option>
							
							<?php while($row1 = $resultado1->fetch_assoc()) { ?>
								<option value="<?php echo $row1['codclase']; ?>"><?php echo $row1['nomclase']; ?></option>
							<?php } ?>
					
						</select>
						</select>
					</div>
					</div>

                <div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Salón</span>
						<select class="material-control" name="codsec" id="seccion" data-toggle="tooltip" data-placement="top" title="Elige el grado">
							

							<option value="0">Selecciona el salon</option>
								<?php while($row = $resultado->fetch_assoc()) { ?>
									<option value="<?php echo $row['codsec']; ?>"><?php echo $row['nomsec']; ?></option>
								<?php } ?>
						
						</select>
						</select>
					</div>
					</div>

                <div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Instructor</span>
						<select class="material-control" name="coddoce" id="doce"  data-toggle="tooltip" data-placement="top" title="Elige el instructor">
							<option value="0">Selecciona el instructor</option>

							<?php while($row2 = $resultado2->fetch_assoc()) { ?>
								<option value="<?php echo $row2['coddoce']; ?>"><?php echo $row2['nomprof']; ?></option>
							<?php } ?>
							
						</select>
						</select>
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