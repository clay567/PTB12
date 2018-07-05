<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		div{
			border: 3px solid lightgreen;
		}
		form{
			border:3px solid darkgreen;
			padding: 10px;
			background-color: #eee;
		}
		input{
			display: block;
			width: 100%;
			margin: 0 0 5px 0;
			border: none;
			padding: 5px;
			text-align: center; 
		}
		input[type=button]:hover{
			background-color: white;
			outline: solid lightgreen;
		}
	</style>
</head>
<body>
	<div>
		<form>
			<input type="text" name="usuario" placeholder="user" id="usuario">
			<input type="text" name="clave" placeholder="password" id="clave">
			<input type="button" name="enviar" value="send" onclick="peticion()">
		</form>
	</div>
	<div id="contenedor" style="display:none;text-align: center;">
		aqui tu respuesta del servidor!
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="peticion.js"></script>
</body>
</html>