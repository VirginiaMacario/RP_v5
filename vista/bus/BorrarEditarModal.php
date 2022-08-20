

<div class="modal fade" id="ver_<?php echo $row['codbus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Buses</h4></center>
				<br>
				<img src ="../../assets/images/buse.png" style="max-width: 110px; margin-left:220px;">
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
			
			<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">DNI del conductor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="dnicon" value="<?php echo $row['dnicon']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Nombre del conductor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nombrcon" value="<?php echo $row['nombrcon']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Apellido del conductor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="apecon" value="<?php echo $row['apecon']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Dirección:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="direcc" value="<?php echo $row['direcc']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Celular:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="celular" value="<?php echo $row['celular']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Teléfono fijo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fijo" value="<?php echo $row['fijo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Correo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="correo" value="<?php echo $row['correo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Sexo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="sexo" value="<?php echo $row['sexo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Grupo Sanguíneo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="tiposan" value="<?php echo $row['tiposan']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Foto del conductor:</label>
					</div>
					<div class="col-sm-10">
						<img src="../../assets/images/imagenes/<?php echo $row['foto']; ?>" alt="" style=""width="150px" height="150px">
						
						
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Placa del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="placa" value="<?php echo $row['placa']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Modelo del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="modelo" value="<?php echo $row['modelo']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Marca del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="marca" value="<?php echo $row['marca']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Color del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="color" value="<?php echo $row['color']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Ruta del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="ruta" value="<?php echo $row['ruta']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Hora de entrada del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="hentr" value="<?php echo $row['hentr']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Hora de salida del bus:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="hsali" value="<?php echo $row['hsali']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-8">
						<label class="control-label" style="position:relative; top:7px;">Foto del bus:</label>
					</div>
					<div class="col-sm-10">
						<img src="../../assets/images/imagenes/<?php echo $row['imagen']; ?>" alt="" style=""width="150px" height="150px">
						
						
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
<div class="modal fade" id="delete_<?php echo $row['codbus']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Borrar buses</h4></center>
				<br>
				<img src ="../../assets/images/buse.png" style="max-width: 110px; margin-left:220px;">
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				
				<h2 class="text-center"><?php echo $row['nombrcon'].' '.$row['apecon']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> </button>
                <a href="BorrarRegistro.php?id=<?php echo $row['codbus']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>