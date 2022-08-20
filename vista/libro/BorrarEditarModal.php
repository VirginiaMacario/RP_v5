

<div class="modal fade" id="ver_<?php echo $va['codlibro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				
                <center><h4 class="modal-title" id="myModalLabel">Título</h4></center>
				
				<br>
				<img src ="../assets/images/flat-book.png" style="max-width: 110px; margin-left:220px;">
				
            </div>
			
			
			
            <div class="modal-body">
			<div class="container-fluid">
			
			
			<form>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Título:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="titu" value="<?php echo $va['titu']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Cantidad:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="canti" value="<?php echo $va['canti']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Súbtitulo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="subt" value="<?php echo $va['subt']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Autor:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="aut" value="<?php echo $va['aut']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Imagen:</label>
					</div>
					<div class="col-sm-10">
						<img src="../assets/images/imagenes/<?php echo $va['foto']; ?>" alt="" style=""width="150px" height="150px">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Archivo:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="archi" value="<?php echo $va['archi']; ?>">
					</div>
				</div>
				
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Año de la publicación:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="anopu" value="<?php echo $va['anopu']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Editorial:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="edito" value="<?php echo $va['edito']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Idioma:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="idiom" value="<?php echo $va['idiom']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Páginas:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="pagi" value="<?php echo $va['pagi']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Peso:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="pes" value="<?php echo $va['pes']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Grado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="nomgra" value="<?php echo $va['nomgra']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Estado:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="esta" value="<?php echo $va['esta']; ?>">
					</div>
				</div>
				
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Fecha de registro:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" readonly="" name="fecreg" value="<?php echo $va['fecreg']; ?>">
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
<div class="modal fade" id="delete_<?php echo $va['codlibro']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
               
            </div>
            <div class="modal-body">	
            	<p class="text-center">¿Esta seguro de Borrar el registro?</p>
				<h2 class="text-center"><?php echo $va['titu'].' '; ?> </h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span></button>
				
                <a href="../vista/libro/BorrarRegistro.php?id=<?php echo $va['codlibro']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
            </div>

        </div>
    </div>
</div>