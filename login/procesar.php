<?php 
	if(!empty($_GET)){
		$user=$_GET['usuario'];
		$password=$_GET['clave'];
	}
	$mysqli=new mysqli("localhost","root","","editorial");
	$consulta="select nivel from usuarios where user='".$user."'"." and password='".$password."'";
	$resultado=$mysqli->query($consulta);
	$arreglo=$resultado->fetch_row();
	if($arreglo[0]==1){
		echo "correcto";
	}else{
		echo "error,vuelva a intentarlo";
	}
 ?>