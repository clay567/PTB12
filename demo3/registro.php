<?php 
include('conexion.php');
$correo=$_GET['correo'];
$telefono=$_GET['telefono'];
$estado_civil=$_GET['estado_civil'];
$hijos=$_GET['hijos'];
$intereses=$_GET['intereses'];
$consulta="insert into personas(correo,telefono,estado_civil,hijos,intereses) values('$correo','$telefono','$estado_civil','$hijos','$intereses')";
$respuesta=$mysqli->query($consulta);
if($respuesta==true){
	header('location:index.php');
}
 ?>
