<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		.contenedor{
			border:solid lightgreen;
			width: 50%;
			margin:auto;
		}
		input{
			width: 100%;

		}
		.aviso{
			border: solid blue;
			margin:auto;
			width: 50%;
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="contenedor">
		<form action="acceso.php" method="post">
			<input type="text" name="nombre_usuario" placeholder="usuario" required>
			<input type="password" name="clave" placeholder="clave" required>
			<input type="submit" name="">
		</form>
	</div>
	<?php 
	if(isset($_GET['mensaje'])){?>
	<div class="aviso">
		<?php echo $_GET['mensaje']; ?>
	</div>
	<?php
	}

	 ?>
</body>
</html>

