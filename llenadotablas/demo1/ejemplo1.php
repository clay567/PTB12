<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		table{
			border: 3px solid lightgreen;
			border-radius: 5px;
			width: 100%;
		}
		tr:hover{
			background-color: lightgreen;
			color:white;
		}
	</style>
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>codigo</th>
				<th>nombre</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$mysqli=new mysqli("localhost","root","","editorial"); 
			$result=$mysqli->query("select clienteID,nombres from clientes");
			?>
			<?php while($arreglo=$result->fetch_row()){ ?>
			<tr><td><?php echo $arreglo[0]; ?></td><td><?php echo $arreglo[1]; ?></td></tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>