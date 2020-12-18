<div class="row">
	<div class="col-sm-12" style="background-color: #FFFFFF;">
		<div class="container" style="margin: 2% 0% 0% 5%;">
			<div class="row">
				<div class="col">
					<div class=""><h2>Categorias</h2></div>
				</div>
				<div class="col-md-auto">
					<button class="btn btn-primary" data-toggle="modal" data-target="#modalInsertar">
						<span class="fas fa-clipboard-check"></span> Agregar nuevo
					</button>
				</div>
			</div>
		</div>
		<div class="card-body">
			<hr>
			<div class="table-responsive">
				<table class="table table-hover" id="tablaload">
					<thead style="background-color: #767676">
						<tr style="color: white">
							<td align="center">Categoria</td>
							<td align="center">Descripción</td>
							<td align="center">Editar</td>
							<td align="center">Eliminar</td>
						</tr>
					</thead>
					<tbody>
						<?php foreach($datos as $key): ?>
							<tr>
								<td align="center"><?php echo $key->categoria ?></td>
								<td align="center"><?php echo $key->descripcion ?></td>
								<td style="text-align: center">
									<a href="<?php echo base_url().'/actuCat/'.$key->id_categoria?>" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
								</td>
								<td style="text-align: center">
									<a href="<?php echo base_url().'/eliminar/'.$key->id_categoria?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
								</td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="modalInsertar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel"> Agregar Categoria </h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form method="POST" action="<?php echo base_url().'/crear' ?>">
					<label> Categoria </label>
					<input type="text" name="categoria" id="categoria" class="form-control input-sm" >
					<label> Descripcion </label>
					<input type="text" name="descripcion" id="descripcion" class="form-control input-sm">
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