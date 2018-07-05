<?php
	
	/*if ($_POST['mes']=="") {
		echo "seleccione una opcion";
	} else {
		$mes=$_POST['mes'];
		print $mes;		
	}*/
	/*$vercontenido=print_r($_GET,true);
	echo $vercontenido;*/
	if($_GET['s']==""){
		echo "sin seleccion";
	}else{
		echo $_GET['s'];
	}
?>