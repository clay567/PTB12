<?php
include 'conexion.php';
$nombre_usuario=$_POST['nombre_usuario'];
$clave=$_POST['clave'];
$consulta="select * from usuarios where nombre_usuario='$nombre_usuario' and clave='$clave'";
$respuesta=mysqli_query($idenlace,$consulta);
$fila=mysqli_fetch_assoc($respuesta);
session_start();
$_SESSION['datos_usuario']=$fila['nombre'].'-'.$fila['apellido'];
//var_dump($fila);
//return;
if($fila['nivel_acceso']=='1'){
	header('location:RegistrarProductos.php');		
}elseif($fila['nivel_acceso']=='2'){
	header('location:listar.php');
}else{
	header('location:index.php?mensaje=clave y/o usuario incorrecto');
}

?>

