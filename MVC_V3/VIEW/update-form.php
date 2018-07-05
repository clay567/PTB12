<!DOCTYPE html>
<html>
<head>
	<title>update</title>
</head>
<body>
	<form method="post" action="index.php?id=<?php  echo $fila['id'];?>&accion=update
	">
		<input type="text" name="nombre" value=<?php echo $fila['nombre']; ?>>
		<input type="text" name="correo" value=<?php echo $fila['correo']; ?>>
		<input type="text" name="telefono" value=<?php echo $fila['telefono']; ?>>
		<input type="text" name="estado_civil" value=<?php echo $fila['estado_civil']; ?>>
		<input type="text" name="hijos" value=<?php echo $fila['hijos']; ?>>
		<input type="text" name="intereses" value=<?php echo $fila['intereses']; ?>>
		<input type="submit" name="submit" value="update">
	</form>
</body>
</html>