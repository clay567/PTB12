<!doctype html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style type="text/css">
	#customers {
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		border-collapse: collapse;
		width: 100%;
	}

	#customers td, #customers th {
	    border: 1px solid #ddd;
	    padding: 8px;
	}

	#customers tr:nth-child(even){background-color: #f2f2f2;}

	#customers tr:hover {background-color: #ddd;}

	#customers th {
	    padding-top: 12px;
	    padding-bottom: 12px;
	    text-align: left;
	    background-color: #4CAF50;
	    color: white;
	}
	.update{
		padding: 6px;
		background-color: gold;
		border: none;
		border-radius: 3px;
		color: white;
		font-weight: bolder;
		cursor: pointer;
	}
	.delete{
		text-decoration: none;
		background-color: tomato;
		border-radius: 3px;
		padding: 3px;
		color: white;
	}
	</style>
</head>
<body>
	<!--boton que muestra el modal nuevo usuario-->
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#nuevo" data-whatever="@getbootstrap">nuevo</button>

	<table id="customers">
		<tr>
			<th>correo</th>
			<th>telefono</th>
			<th>estado civil</th>
			<th>hijos</th>
			<th>intereses</th>
			<th>editar</th>
			<th>eliminar</th>
		</tr>
		<?php 
		include('conexion.php');
		$consulta="select id,correo,telefono,estado_civil,hijos,intereses from personas";
		$mysqli_result=$mysqli->query($consulta);
		while ($fila=$mysqli_result->fetch_assoc()) {?>	
			<tr>	
				<td><input type="text" name="correo" value=<?php  echo $fila['correo'];?>></td>
				<td><input type="text" name="telefono" value=<?php  echo $fila['telefono'];?>></td>
				<td><input type="text" name="estado_civil" value=<?php  echo $fila['estado_civil'];?>></td>
				<td><input type="text" name="hijos" value=<?php  echo $fila['hijos'];?>></td>
				<td><input type="text" name="intereses" value=<?php  echo $fila['intereses'];?>></td>
				<!--update-->
				<td>
				<?php 
				 echo "<a data-toggle='modal' data-target='#editUsu' data-correo='".$fila['correo']."' data-telefono='".$fila['telefono']."' data-estadocivil='".$fila['estado_civil']."' data-hijos='".$fila['hijos']."' data-intereses='".$fila['intereses']."' data-id='".$fila['id']."' class='btn btn-warning'>Editar</a>";	
				 ?>				
				</td>
				<!--delete-->
				<td><a href="#" data-target="#modal-delete" data-toggle="modal" data-href=eliminar.php?id=<?php echo $fila['id'];?> class="delete">eliminar</a></td>
			</tr>		
			<?php }?>
	</table>

	<!--modal de nuevo usuario-->
	<div class="modal fade" id="nuevo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
		      	<!--formulario que registra nuevo usuario-->
		        <form action="registro.php" method="get">
		          <div class="form-group">
		            <label for="email" class="col-form-label">correo</label>
		            <input type="text" class="form-control" id="email" name="correo">
		          </div>
		          <div class="form-group">
		            <label for="tel" class="col-form-label">telefono</label>
		            <input type="text" class="form-control" id="tel" name="telefono">
		          </div>
		          <div class="form-group">
		            <label for="estado" class="col-form-label">estado civil</label>
		            <input type="text" class="form-control" id="estado" name="estado_civil">
		          </div>
		          <div class="form-group">
		            <label for="hijos" class="col-form-label">hijos</label>
		            <input type="text" class="form-control" id="hijos" name="hijos">
		          </div>
		          <div class="form-group">
		            <label for="intereses" class="col-form-label">intereses</label>
		            <input type="text" class="form-control" id="intereses" name="intereses">
		          </div>
		           <input type="submit" class="btn btn-primary">
		        </form>
		        <!--end formulario registra-->
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		</div>
	</div>
	<!--end modal nuevo-->

	<!--modal editar usuario-->
	<div class="modal" id="editUsu" tabindex="-1" role="dialog" aria-labellebdy="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4>Editar Contacto</h4>
                </div>
                <div class="modal-body"> 
                	<!--formulario que actualiza usuario-->                     
                   <form action="actualizar.php" method="POST">                       		        
           		        <input type="hidden" name="id" id="id">		
                   		<div class="form-group">
                   			<label for="email">correo:</label>
                   			<input class="form-control" id="email" name="correo" type="text" ></input>
                   		</div>
                   		<div class="form-group">
                   			<label for="telefono">telefono:</label>
                   			<input class="form-control" id="telefono" name="telefono" type="text" ></input>
                   		</div>
                   		<div class="form-group">
                   			<label for="estadoCivil">estado civil:</label>
                   			<input class="form-control" id="estadoCivil" name="estado_civil" type="text" ></input>
                   		</div>
                   		<div class="form-group">
                   			<label for="prole">hijos:</label>
                   			<input class="form-control" id="prole" name="hijos" type="text" ></input>
                   		</div>
                   		<div class="form-group">
                   			<label for="interes">intereses:</label>
                   			<input class="form-control" id="interes" name="intereses" type="text" ></input>
                   		</div>
						<input type="submit" class="btn btn-success">							
                   </form>
                   <!--end form update user-->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div> 
	<!--end modal editar-->
    
    <!--modal delete-->
	<div class="modal fade" id="modal-delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">DELETE(Eliminar)</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <p>esta seguro de eliminar el registro</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <a class="btn btn-primary btn-ok">delete</a>
	      </div>
	    </div>
	  </div>
	</div>
    <!--end delete-->
    
    <!--validacion de parametro mensaje-->
    <?php 
	/*if(isset($_GET) && !empty($_GET['mensaje'])){
		$mensaje=$_GET['mensaje'];
		echo "<script>alert('".$mensaje."')</script>";
		}*/
	?>
	
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	
	<script type="text/javascript">
		/*
		show.bs.modal
		Este evento se dispara inmediatamente cuando se llama al método show instance. Si se produce por un clic, el elemento cliqueado está disponible como la propiedad de destino relacionada del evento (event.relatedTarget).
		*/
		$('#editUsu').on('show.bs.modal', function (event) {
		var button = $(event.relatedTarget); // Button that triggered the modal
		
		//todos los valores de atributo data-* del tag <a>
		var recipient0 = button.data('correo'); // Extract info from data-* attributes
		// If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		// Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		var recipient1 = button.data('telefono');
		var recipient2 = button.data('estadocivil');
		var recipient3 = button.data('hijos');
		var recipient4 = button.data('intereses');
		var recipient5 = button.data('id');
		var modal = $(this);
		//modal.find('.modal-title').text('New message to ' + recipient);
		
		//id de los campos del formulario de editUsu
		modal.find('.modal-body #email').val(recipient0);
		modal.find('.modal-body #telefono').val(recipient1);
		modal.find('.modal-body #estadoCivil').val(recipient2);
		modal.find('.modal-body #prole').val(recipient3);
		modal.find('.modal-body #interes').val(recipient4);
		modal.find('.modal-body #id').val(recipient5);
		});
	</script>
	<script type="text/javascript">
		$('#modal-delete').on('show.bs.modal',function(e){
			var modal=$(this);
			var boton=$(e.relatedTarget);
			modal.find('.btn-ok').attr('href',boton.data('href'));
		});

	</script>

</body>
</html>

