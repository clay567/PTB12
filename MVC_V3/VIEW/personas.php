<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div><a href="index.php?accion=create">add new person</a></div>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>nombre</th>
				<th>correo</th>
				<th>telefono</th>
				<th>estado civil</th>
				<th>hijos</th>
				<th>intereses</th>
				<th>accion</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			while($fila=$mysqli_result->fetch_assoc()){
				?>
				<tr>
					<td><?php  echo $fila['id'];?></td>
					<td><?php  echo $fila['nombre'];?></td>
					<td><?php  echo $fila['correo'];?></td>
					<td><?php  echo $fila['telefono'];?></td>
					<td><?php  echo $fila['estado_civil'];?></td>
					<td><?php  echo $fila['hijos'];?></td>
					<td><?php  echo $fila['intereses'];?></td>
					<td>
						<a href="index.php?id=<?php echo $fila['id'];?>&accion=delete">delete</a>
						<a href="index.php?id=<?php echo $fila['id'];?>&accion=show">update</a>
					</td>
				</tr>
			<?php
			}
			 ?>
		</tbody>
	</table>
</body>
</html>