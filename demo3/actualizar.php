<?php 
/*
correo:cobain@gmail.com
telefono:7895142
estado_civil:CASADO
hijos:1
intereses:Array
id:14
*/
$correo=$_POST['correo'];
$telefono=$_POST['telefono'];
$estado_civil=$_POST['estado_civil'];
$hijos=$_POST['hijos'];
$intereses=$_POST['intereses'];
$id=$_POST['id'];

$mysqli=new mysqli("localhost","root","","personal");
$consulta="update personas set correo='$correo',telefono='$telefono',estado_civil='$estado_civil',hijos=$hijos,intereses='$intereses' where id=$id";
$bool=$mysqli->query($consulta);
if ($bool==true) {
	$mensaje="actualizado";
	//header("location:index.php?mensaje=$mensaje");
	header("location:index.php");
}else{
	echo "error de actualizacion";
}

 ?>