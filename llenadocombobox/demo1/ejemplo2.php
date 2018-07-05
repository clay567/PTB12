<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		*{
			box-sizing: border-box;
		}
		div{
			border: 3px solid red;
			padding: 10px;
		}
		form{
			border: solid blue; 
		}
		select{
			width: 100%;
		}
		option:hover{
			cursor: pointer;
			color :green;
		}
	</style>
</head>
<body>
	<?php 
	$mysqli=new mysqli("localhost","root","","editorial");
	$result=$mysqli->query("select clienteID,nombres from clientes");
	 ?>
	<div>
		<form>
			<select>
				<option>seleccione</option>
				<?php while($arreglo=$result->fetch_row()){ ?>
				<option style="background-color:black;color:white;"value=<?php echo $arreglo[0]; ?>><?php echo $arreglo[1];  ?></option>
				<?php } ?>
			</select>
		</form>
	</div>
</body>
</html>