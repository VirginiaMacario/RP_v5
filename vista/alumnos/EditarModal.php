<!-- Ventana Editar Registros CRUD -->
<div class="modal fade" id="file_<?php echo $va['codalum']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" enctype="multipart/form-data" action="../vista/alumnos/EditarRegistro.php?id=<?php echo $va['codalum']; ?>">
			<?php
				require ('conexion.php');

				$query = "SELECT codclase, nomclase FROM clase ORDER BY nomclase";
				$resultado=$mysqli->query($query);

				$query1 = "SELECT codasig, tituloa FROM asignacion ORDER BY tituloa";
				$resultado2=$mysqli->query($query1);

				$query3 = "SELECT codsec, nomsec FROM seccion ORDER BY nomsec";
				$resultado3=$mysqli->query($query3);


			?>

			
			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Nombre:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="nombrea" id="imagen" placeholder="Nombre" value="<?php echo $va['nombrea']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Apellido:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="apellidoa" id="imagen" placeholder="Apellido" value="<?php echo $va['apellidoa']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>
			
			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Nacimiento:</label></div>
				<div class="col-12 col-md-9">
				<input type="date" class="form-control" name="fecha_naci" id="imagen" placeholder="fecha" value="<?php echo $va['fecha_naci']; ?>>
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>


			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Dirección:</label></div>
				<div class="col-12 col-md-9">
				<input type="text" class="form-control" name="direccion" id="imagen" placeholder="direccion" value="<?php echo $va['direccion']; ?>">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
            </div>
            </div>

			<div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Tema:</span>
						<select class="material-control" name="codclase" id="class" data-toggle="tooltip" data-placement="top" title="Elige el grupo" value="<?php echo $va['nomclase']; ?>">
							<option value="0">Selecciona el tema</option>
							
							<?php while($row = $resultado->fetch_assoc()) { ?>
								<option value="<?php echo $row['codclase']; ?>"><?php echo $row['nomclase']; ?></option>
							<?php } ?>
					
						</select>
						</select>
					</div>
					</div>


					<div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Evento:</span>
						<select class="material-control" name="codasig" id="class" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
							<option value="0">Selecciona el evento</option>
							
							<?php while($row = $resultado2->fetch_assoc()) { ?>
								<option value="<?php echo $row['codasig']; ?>"><?php echo $row['tituloa']; ?></option>
							<?php } ?>
					
						</select>
						</select>
					</div>
					</div>


                <div class="col-xs-12 col-sm-6">
					<div class="group-material">
						<span>Salón</span>
						<select class="material-control" name="codsec" id="seccion" data-toggle="tooltip" data-placement="top" title="Elige el grado" value="<?php echo $va['nomsec']; ?>>
							

							<option value="0">Selecciona el salon</option>
								<?php while($row3 = $resultado3->fetch_assoc()) { ?>
									<option value="<?php echo $row3['codsec']; ?>"><?php echo $row3['nomsec']; ?></option>
								<?php } ?>
						
						</select>
						</select>
					</div>
					</div>

			<div class="row form-group">
				<div class="col col-md-3"><label for="hf-nombre" class=" form-control-label">Foto</label></div>
				<div class="col-12 col-md-9">
				<img src="../assets/images/imagenes/<?php echo $va['foto']; ?>" alt="" style=""width="190px" height="200px"><p style="margin-left:60px;">Antigua</p>

				<input type="file" class="form-control" name="foto" id="imagen" maxlength="100000px" placeholder="Imagen">
				<input type="hidden" class="form-control" name="imagenactual" id="imagenactual">
				
				
							<br />

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
