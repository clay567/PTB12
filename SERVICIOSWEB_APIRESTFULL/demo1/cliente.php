<?php 
//Este constructor crea objetos SoapClient en modo WSDL o non-WSDL.
	$cliente=new SoapClient(null,array('location'=>'http://localhost/PRACTICAS_PHP/SERVICIOSWEB/servicio.php','uri'=>'http://localhost/PRACTICAS_PHP/SERVICIOSWEB/'));
	echo $cliente->multiplica(4,5);
 ?>