<?php
/*La función shuffle () aleatoriza el orden de los elementos de la matriz.*/
/*Actualiza la página para ver cómo aleatorio () aleatoriza el orden de los elementos de la matriz.*/
/*Value: 	Returns TRUE on success or FALSE on failure*/
/*La etiqueta <meta> también se utiliza para indicarle al navegador alguna información o alguna acción que debe realizar. En este caso se utiliza el atributo http-equiv, en lugar del atributo name.

Por ejemplo, imaginemos que por algún motivo queremos que nuestra página se actualice automáticamente cada 30 segundos. En ese caso, deberíamos utilizar la acción Refresh (actualizar).*/
/*A través de esta etiqueta pueden especificarse los atributos name y content. El atributo name indica el tipo de información, y el atributo content indica el valor de dicha información.*/
$pictures=array('imagenes/descarga (1).jpg','imagenes/descarga.jpg','imagenes/images.jpg');
shuffle($pictures);
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="refresh" content="7">
<title>bob's auto parts</title>
</head>
<body>
<h1>bob's auto parts</h1>
<h2>Customer Order</h2>
<table border="1">
	<tr>
		<?php
			for ($i = 0; $i < 3; $i++) {
				echo"<td><img src='$pictures[$i]'></td>"; 
			}
		?>
	</tr>
</table>
</body>
</html>