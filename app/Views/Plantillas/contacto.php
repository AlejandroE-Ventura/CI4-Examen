<?php
$mysqli = new mysqli('localhost', 'root', '', 'agenda');
?>	
<div class="container">
	<div class="row">
		<div class="container" style="margin: 2% 0% 0% 5%;">
			<div class="row">
				<div class="col">
					<div class=""><h2>Agenda</h2></div>
				</div>
				<div class="col-md-auto">
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
						<span class="fas fa-user-plus"></span> Agregar nuevo
					</button>
				</div>
			</div>
		</div>
		<div class="col-sm-12" style="background-color: #FFFFFF;">
			<div class="card-body">
				<hr>
				<div class="table-responsive">
					<table class="table table-hover" id="tablaload">
						<thead>
							<td align="center">ID</td>
							<td align="center">Nombre</td>
							<td align="center">Ap. Paterno</td>
							<td align="center">Ap. Materno</td>
							<td align="center">Telefono</td>
							<td align="center">E-mail</td>
							<td align="center">Categoria</td>
							<td align="center">Editar</td>
							<td align="center">Eliminar</td>
						</thead>
						<tbody>
							<?php foreach($datos as $key): ?>
								<tr>
									<td align="center"><?php echo $key->id_contacto ?></td>
									<td align="center"><?php echo $key->nombre ?></td>
									<td align="center"><?php echo $key->paterno ?></td>
									<td align="center"><?php echo $key->materno ?></td>
									<td align="center"><?php echo $key->telefono ?></td>
									<td align="center"><?php echo $key->email ?></td>
									<td align="center"><?php echo $key->categoria ?></td>
									<td style="text-align: center">
										<a href="<?php echo base_url().'/obtCont/'.$key->id_contacto?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
									</td>
									<td style="text-align: center">
										<a href="<?php echo base_url().'/eliminarcont/'.$key->id_contacto?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
<!-- Modal agregar-->
<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Agregar Contacto </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url().'/CrearCont'?>">
					<label> Nombre </label>
					<input type="text" name="nombre" id="nombre" class="form-control input-sm">
					<label> Apellido Paterno </label>
					<input type="text" name="paterno" id="paterno" class="form-control input-sm">
					<label> Apellido Materno </label>
					<input type="text" name="materno" id="materno" class="form-control input-sm">
					<label> Telefono </label>
					<input type="text" name="telefono" id="telefono" class="form-control input-sm">
					<label> E-mail </label>
					<input type="text" name="email" id="email" class="form-control input-sm">
					<label>Categoria</label>
					<select name="id_categoria" id="id_categoria" class="form-control">
						<option disabled selected>Escoje categoria</option>
						<?php
						$query = $mysqli -> query ("SELECT id_categoria, categoria FROM t_categorias");
						while ($valores = mysqli_fetch_array($query)) {?>
							<option value="<?php echo $valores[0]?>"><?php echo $valores[1]?></option>
						<?php }?>
					</select>
					<hr>
					<button type="button" class="btn btn-danger" data-dismiss="modal" >
						<span class="fas fa-times-circle"></span> Cerrar
					</button>
					<button class="btn btn-primary"><span class="fas fa-save"></span> Guardar</button>
				</form>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('#tablaload').DataTable({
			"language": {
				"url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
			}
		});
	} );
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script type="text/javascript">
	let mensaje = '<?php echo $mensaje ?>';

	if (mensaje =='1'){
		swal(':D','Agregado con exito','success');

	}else if(mensaje == '0'){
		swal(':(','Fallo al agregar','error');  
	}else if(mensaje == '2'){
		swal(':D','Actualizado con exito','success');  
	}else if(mensaje == '3'){
		swal(':D','Fallo al actualizar','error');  
	} else if(mensaje == '4'){
		swal(':D','Eliminado con exito','success');  
	}else if(mensaje == '5'){
		swal(':D','Fallo al eliminar','error');  
	}
</script>