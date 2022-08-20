

<div class="modal fade" id="ver_<?php echo $row['codcali']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Calificación</h4></center>
				<br>
				<img src ="../../assets/images/cali.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Año académico:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomano" value="<?php echo $row['nomano']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Periodo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nompe" value="<?php echo $row['nompe']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Docente:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomprof" value="<?php echo $row['nomprof']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Clase:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomclase" value="<?php echo $row['nomclase']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Sección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomsec" value="<?php echo $row['nomsec']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Alumno:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nombrea" value="<?php echo $row['nombrea']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Práctica calificada:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="praccali" value="<?php echo $row['praccali']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Éxamen Parcial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="examparc" value="<?php echo $row['examparc']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Calificación individual:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="indiv" value="<?php echo $row['indiv']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha de registro:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fechare" value="<?php echo $row['fechare']; ?>">
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
