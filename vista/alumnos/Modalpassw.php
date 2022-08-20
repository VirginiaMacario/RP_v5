

<div class="modal fade" id="password_<?php echo $va['codalum']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Restablecer contraseña</h4></center>
				<br>
				<img src ="../assets/images/lock.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form  method="POST" autocomplete="off" action="../vista/alumnos/editarpassw.php?id=<?php echo $va['codalum']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nueva contraseña:</label>
					</div>
					<div class="col-sm-10">
						<input type="password" class="form-control"  name="password">
					</div>
				</div>
				
				
            </div> 
			</div>
			
			
			
            <div class="modal-footer">
			 <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
			<button type="submit" name="editar" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Aplicar cambios</a>
                
			</form>
            </div>

        </div>
    </div>
</div>


<!-- Delete -->
