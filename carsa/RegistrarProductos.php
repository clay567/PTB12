<!DOCTYPE HTML>
<html>
<head>
	<title>registrar accesorio</title>
</head>
<body>
	<?php 
	session_start();
	echo $_SESSION['datos_usuario'];
	 ?>
	<form action="insertarProducto.php" method="post" enctype="multipart/form-data">
		<table border="1">
			<tr>
				<td colspan="2" align="center">
				REGISTRAR ACCESORIO
				</td>
			</tr>
			<tr>
				<td>descripcion</td>
				<td><textarea name="descripcion"></textarea></td>
			</tr>
			<tr>
				<td>precio costo</td>
				<td><input type="text" name="precio_costo"></td>
			</tr>
			<tr>
				<td>precio venta</td>
				<td><input type="text" name="precio_venta"></td>
			</tr>
			<tr>
				<td>stock</td>
				<td><input type="text" name="stock"></td>
			</tr>
			<tr>
				<td>estado</td>
				<td>habilitar<input type="radio" name="estado" value="1">deshabilitar<input type="radio" name="estado" value="0"></td>
			</tr>
			<tr>
				<td>fecha de registro</td>
				<td><input type="date" name="fecha_registro"></td>
			</tr>
			<tr>
				<td>imagen</td>
				<td><input type="file" name="imagen"></td>
			</tr>
			<tr align="center">
				<td colspan="2">
					<input type="submit" name="btnenviar" value="grabar">
					<input type="reset" name="btnlimpiar" value="nuevo">
				</td>
			</tr>
		</table>
	</form>
</body>
</html>
