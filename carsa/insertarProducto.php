<?php 
require 'conexion.php';

		$descripcion = $_POST["descripcion"];
		$precio_costo = $_POST["precio_costo"];
		$precio_venta = $_POST["precio_venta"];
		$stock = $_POST["stock"];
		$estado=$_POST['estado'];
		$fecha_registro=$_POST['fecha_registro'];
		$nombre_imagen=$_FILES['imagen']['name'];
		$origen=$_FILES['imagen']['tmp_name'];
		$longitud=$_FILES['imagen']['size'];
		$destino=$_SERVER['DOCUMENT_ROOT'].'PHP/DDBB/carsa/LocalStorage/'.$nombre_imagen;
		copy($origen,$destino);
		$handle=fopen($destino,'r');
		$flujoBytes=fread($handle,$longitud);
		$flujoBytes=addslashes($flujoBytes);
		fclose($handle);
		$ruta='LocalStorage/'.$nombre_imagen;
		//insertando los valores
		$sql = "insert into productos(descripcion,precio_costo,precio_venta,stock,estado,fecha_registro,imagen,ruta) values('$descripcion',$precio_costo,$precio_venta,$stock,$estado,'$fecha_registro','$flujoBytes','$ruta')";
		if(mysqli_query($idenlace, $sql)){
			//header('location:listar.php');
			echo "exito";
		}else{
			echo "<b>Error al grabar";
		}
	
?>