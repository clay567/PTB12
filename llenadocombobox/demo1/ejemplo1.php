<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
 		select{
		background-color: black;
		color:white;
		width: 100%;
 	}
 </style>
</head>
<body>
<?php 
	$mysqli=new mysqli("localhost","root","","editorial");
	$stmt=$mysqli->prepare("select clienteID,nombres from clientes");
	$stmt->execute();
	$stmt->bind_result($codigoCliente,$nombreCliente);
 ?>
 <select>
 	<option>--seleccione--</option>
 	<?php while($stmt->fetch()){ ?>
 	<option value=<?php echo $codigoCliente; ?>><?php echo $nombreCliente ?></option>
 	<?php } ?>
 </select>
</body>
</html>

