<?php 
	require_once('calculadora.php');
	$server=new SoapServer(null,array('uri'=>'http://localhost/PRACTICAS_PHP/SERVICIOSWEB/'));
	//Define la clase que controla las peticiones SOAP .Exporta todos los métodos de una clase específica
	$server->setClass('calculadora');
	//Controla la petición soap. Procesa una petición SOAP, llama a las funciones necesarias y envía una respuesta.
	$server->handle();
 ?>