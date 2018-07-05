<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		div{
			background-color: #eee;
			width: 50%;
			margin: auto;
			border-radius: 5px;
			border:solid blue;
		}
		input,select{
			display: block;
			width: 100%;
		}
		form{
			border:solid red;
			/*padding:*/ 
		}
	</style>
</head>
<body>
<div>
	<!--el archivo requerido debe estar entre comillas sino genera error-->
	<?php  require('conexion.php'); ?>
	<?php 
	$resultado=$objcnx->query("select * from usuario");
	 ?>
	<form  id="reporte" >
		<select name="CodigoUsuario">
			<?php while($row=$resultado->fetch_row()){ ?>
			<option value=<?php echo $row[0]; ?>><?php echo $row[1]; ?></option>
			<?php } ?>
		</select>		
		<select name="CodigoAccion">
			<option value="0">modificar</option>
			<option value="1">eliminar</option>
			<option value="2">crear</option>
			<option value="3">duplicar</option>
			<option value="4" selected="selected">todos</option>
		</select>
		<input type="date" name="FechaInicial" value=<?php echo date( "Y-m-d",mktime(0, 0, 0, date("m")-1,date("d"), date("Y")));?>>
		<input type="date" name="FechaFinal" value=<?php echo date( "Y-m-d"); ?>>	
		<input type="text" name="nuevo">
		<input type="button" onclick="enviar()" value="generar reporte">

	</form>	
</div>
<script type="text/javascript">
	function enviar(event){
		//event.preventDefault();
		window.open('reporte.php?'+ $('#reporte').serialize(),"_blank","width=1024,height=668");
	}
</script>
</body>
</html>