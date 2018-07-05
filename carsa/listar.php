<?php
include 'conexion.php';
$query="select * from productos";
$resultado=mysqli_query($idenlace, $query);
?>
<?php
	//mysqli_close($idenlace);
	session_start();
	echo "<p>".$_SESSION['datos_usuario']."</p>";
	echo '<table border="1">
			<tr>
				<th>descripcion</th>
				<th>precio costo</th>
				<th>precio venta</th>
				<th>stock</th>
				<th>estado</th>
				<th>fecha registro</th>
				<th>imagen</th>
			</tr>';
	while ($campos=mysqli_fetch_assoc($resultado)) {
		echo '<tr>';
		echo "<td>".$campos['descripcion']."</td>";
		echo "<td>".$campos['precio_costo']."</td>";
		echo "<td>".$campos['precio_venta']."</td>";
		echo "<td>".$campos['stock']."</td>";
		echo "<td>".$campos['estado']."</td>";
		echo "<td>".$campos['fecha_registro']."</td>";
		echo "<td><img src='".$campos['ruta']."' width='100' height='100'></td>";
		echo '</tr>';
	}
	echo '</table>';
?>
<a href="logout.php">cerrar sesion</a>

