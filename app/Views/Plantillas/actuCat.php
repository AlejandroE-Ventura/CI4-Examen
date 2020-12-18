<?php 
$idNombre = $datos[0]['id_categoria'];
$categoria = $datos[0]['categoria']; 
$descripcion = $datos[0]['descripcion'];
?>
<div class="container">
	<div class="container" style="margin: 2% 0% 0% 5%;">
		<div class="row">
			<div class="col">
				<div class=""><h2>Actualizar Categorias</h2></div>
			</div>
			<div class="col-md-auto">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12" style="background-color: #FFFFFF;">
			<div class="card-body">
				<hr>
				<form method="POST" action="<?php echo base_url().'/actCatG' ?>">
					<input type="text" id="idNombre" name="idNombre" hidden="idNombre" value="<?php echo $idNombre ?>">
					<label for="categoria">Categoria</label>
					<input type="text" name="categoria" id="categoria" class="form-control" value="<?php echo $categoria ?>">
					<label for="descripcion">Descripción</label>
					<input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $descripcion ?>"><br>
					<button class="btn btn-primary">Guardar</button>
				</form>

			</div>
		</div>
	</div>
</div>