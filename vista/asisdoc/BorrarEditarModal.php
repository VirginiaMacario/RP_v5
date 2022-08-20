

<div class="modal fade" id="edit_<?php echo $row['coddoce']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Actualizar asistencia</h4></center>
					<br>
				<img src ="../../assets/images/portapapeles.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form method="POST" action="BorrarRegistro.php?id=<?php echo $row['coddoce']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Asistencia:</label>
					</div>
					<div class="col-xs-12 col-sm-6">
				<div class="group-material">
					
					<select class="material-control tooltips-general" name="presen" data-toggle="tooltip" data-placement="top" title="Elige el grupo">
						<option disabled="" value="">Seleccione</option>
						<option value="Presente">Presente</option>
						<option value="Tarde">Tarde</option>
						<option value="Ausente">Ausente</option>
					</select>
				</div>
			</div>
				</div>
				
				
            </div> 
			</div>
			
			
			
            <div class="modal-footer">
                 <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="editar" onclick="funcionAlerta()" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar 
				</button>
			</form>
            </div>

        </div>
    </div>
</div>

