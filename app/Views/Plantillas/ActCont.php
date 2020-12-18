<?php 
$idNombre = $datos[0]['id_contacto'];
$nombre = $datos[0]['nombre'];
$paterno = $datos[0]['paterno']; 
$materno = $datos[0]['materno']; 
$telefono = $datos[0]['telefono']; 
$email = $datos[0]['email'];
$id_categoria = $datos[0]['id_categoria'];
?>
<?php
$mysqli = new mysqli('localhost', 'root', '', 'agenda');
?>
<div class="container">
	<div class="row">
		<div class="container" style="margin: 2% 0% 0% 5%;">
			<div class="row">
				<div class="col">
					<div class=""><h2>Actualizar cantacto</h2></div>
				</div>
				<div class="col-md-auto">
					
				</div>
			</div>
		</div>
		<div class="col-sm-12" style="background-color: #FFFFFF;">
			<div class="card-body">
				<hr>
				<form method="POST" action="<?php echo base_url().'/ActuCont' ?>">
					<input type="text" id="idNombre" name="idNombre" hidden="idNombre" value="<?php echo $idNombre ?>">
					<label> Nombre </label>
					<input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $nombre ?>">
					<label> Apellido Paterno </label>
					<input type="text" name="paterno" id="paterno" class="form-control" value="<?php echo $paterno ?>">
					<label> Apellido Materno </label>
					<input type="text" name="materno" id="materno" class="form-control" value="<?php echo $materno ?>">
					<label> Telefono </label>
					<input type="text" name="telefono" id="telefono" class="form-control" value="<?php echo $telefono ?>">
					<label> E-mail </label>
					<input type="text" name="email" id="email" class="form-control" value="<?php echo $email ?>">
					<label>Categoria</label>
					<select name="id_categoria" id="id_categoria" class="form-control">
						<?php
						$query = $mysqli -> query ("SELECT id_categoria, Categoria FROM t_categorias");
						while ($valores = mysqli_fetch_array($query)) {?>
							<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
						<?php }?>
					</select><br>
					<button class="btn btn-warning">Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>