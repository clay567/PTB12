<?php
	require 'conexion.php';
	$where = "";
	/*
	sino esta vacia $_POST entonces aplicamos el filtro $where en caso contrario
	no aplicariamos el filtro 
	*/
	//este codigo esta relacionado con el form inline de busqueda
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}
	$sql = "SELECT * FROM personas $where";
	$resultado = $mysqli->query($sql);
?>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap-theme.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>	
</head>
<body>
<div class="container">
	<div class="row">
		<h2 style="text-align:center">Curso de PHP y MySQL</h2>
	</div>
	<div class="row">
		<a href="nuevo.php" class="btn btn-primary">Nuevo Registro</a>
		<!--$_SERVER es un array que contiene información, tales como cabeceras, rutas y ubicaciones de script. Las entradas de este array son creadas por el servidor web. No hay garantía que cada servidor web proporcione alguna de estas entradas, existen servidores que pueden omitir algunas o proporcionar otras no recogidas aquí.-->
		<!--$_SERVER['PHP_SELF'] El nombre del archivo de script ejecutándose actualmente, relativa al directorio raíz de documentos del servidor. Por ejemplo, el valor de $_SERVER['PHP_SELF'] en un script ejecutado en la dirección http://example.com/foo/bar.php será /foo/bar.php.-->
		<!--form inline de busqueda-->
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
			<b>Nombre: </b><input type="text" id="campo" name="campo" />
			<input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
		</form>
	</div>
	<br>
	<div class="row table-responsive">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Telefono</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php while($row = $resultado->fetch_array(MYSQLI_ASSOC)) { ?>
					<tr>
						<td><?php echo $row['id']; ?></td>
						<td><?php echo $row['nombre']; ?></td>
						<td><?php echo $row['correo']; ?></td>
						<td><?php echo $row['telefono']; ?></td>
						<!--envio de parametro id al archivo modificar.php-->
						<td><a href="modificar.php?id=<?php echo $row['id']; ?>"><span class="glyphicon glyphicon-pencil"></span></a></td>
						<!--aqui es donde se despliega el modal al eliminar un registro-->
						<td><a href="#" data-href="eliminar.php?id=<?php echo $row['id']; ?>" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>
<!-- Modal:se despliega cuando el usuario elimina un registro -->
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
			</div>
			<div class="modal-body">
				¿Desea eliminar este registro?
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				<a class="btn btn-danger btn-ok">Delete</a>
			</div>
		</div>
	</div>
</div>
<!--script para el funcionamiento del modal-->
<script>
	/*
	show.bs.modal :Este evento se dispara inmediatamente cuando se llama al método show instance. Si se produce por un clic, el elemento cliqueado está disponible como la propiedad de destino relacionada del evento.
	*/
	//$(e.relatedTarget).data('href') obtiene el valor del atributo href al clickear el tag <a> para luego agregarle esa propiedad href al tag <a> de clase btn-ok ,que esta ubicado en el div.modal-footer
	$('#confirm-delete').on('show.bs.modal', function(e) {
		/*
		find:Obtenga los descendientes de cada elemento en el conjunto actual de elementos coincidentes, filtrados por un selector, objeto jQuery o elemento.
		$(e.relatedTarget):Botón que activó el modal
		*/
		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
		//$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
	});
</script>	

</body>
</html>	