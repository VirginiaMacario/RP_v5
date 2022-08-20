<!-- Agregar Nuevos Registros -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Listado de docentes</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			
		<table class="table table-bordered">
		
			<thead>
				<th>#</th>
				<th>Foto</th>
				<th>Nombre</th>
				<th>Asistencia</th>
				
				
				
			</thead>
			
			<tbody class="BusquedaRapida">
					<?php foreach($datos as $d): ?>
						<tr>
							<td><?php echo $d->coddoce; ?></td>
							
							<td><?php  echo "<img src='../../assets/images/imagenes/".$d->foto."'width='90'"; ?></td>
							
							
							<td><?php echo $d->nomprof;?> <br>&nbsp;<?php echo $d->apeprof;?></td>
							<td>
								<select class="form-select" id="asistencia">
									  <option value="0">Seleccionar</option>
									  <option value="Presente">Presente</option>
									  <option value="Tarde">Tarde</option>
									  <option value="Ausente">Ausente</option>
								</select>
							</td>
							
							
							
						</tr>						
					<?php endforeach; ?>
				</tbody>
				
				
		</table>
			
            </div>

        </div>
    </div>
</div>
</div>