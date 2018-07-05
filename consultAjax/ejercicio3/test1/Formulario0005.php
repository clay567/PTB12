<!DOCTYPE html>
<html>
<head>
	<meta charset="ISO-8859-1">
	<title>procesar informacion de formularios</title>
	<link rel="stylesheet" type="text/css" href="../../../../CSS/estilos005.css">
	<link rel="icon" type="image/png" href="../imagenes/buscar.png">

</head>
<body>
	<div id="contenedor">
		<form  method="post"  action="procesaformulario0005.php" name="formulario0005" accept-charset="utf-8">
			<input type="checkbox" name="puesto_directivo" value="directivo" id="directivo" checked ><label for="directivo">directivo</label><br>
			<input type="checkbox" name="puesto_tecnico" value="tecnico"  id="tecnico" ><label for="tecnico">tecnico</label><br>                                    
			<input type="checkbox" name="puesto_empleado" value="empleado"  id="empleado" ><label for="empleado">empleado</label><br>
			<input type="submit" value="valorEnviadoServer" name="enviar">
			<input type="reset" value="Restablecer" name="restablecer">
		</form> 
	</div>
	<?php 
	if(isset($_GET['r'])){
	echo "<div style='border:solid blue'>";
	echo $_GET['r'];
	echo "</div>"; 
	}
	?>
		
</body>
</html>