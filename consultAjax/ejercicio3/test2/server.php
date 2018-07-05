<?php
if($_POST){
	//comunicacion entre:html-js-php-js-html
	//capturamos el contenido de $_GET en una variable
	//para enviarselo al js con un echo,y este lo muestre al interior de un nodo
	/*$res=print_r($_GET,true);
	echo $res;*/

	//comunicacion entre:html-php
	//length no existe para php ,use count()
	//print gettype($_POST);
	//$longitud=count($_POST);	
	//echo "$longitud";
	//var_dump($_POST);
	//$respuesta="";
	if ($_POST['dir']=="undefined" && $_POST['tec']=="undefined"){

		echo "no selecciono ninguna de las opciones!!!";
			
	}else{
			
		$respuesta = $_POST['dir']." y ".$_POST['tec'];				
		echo "tus GUSTOS son:".$respuesta;
	}	
}else{
	echo "array vacio...!";
} 
?>