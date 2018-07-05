<?php 
	function autocarga($nombre){
		//el parametro nombre sera reemplazado por el nombre de la clase, en tiempo de compilacion
		//con esto evitamos una larga lista de include
		include $nombre.".php";
	}
	//pasamos como parametro la funcion de autocarga creada
	spl_autoload_register('autocarga');
	echo "<h1 style=background-color:#ffbf00;text-align:center>autocarga de clases:uso de spl_autoload_register() y creacion de la funcion de autocarga</h1>";
	clase3::mensaje('no te olvides de tu serie favorita Mr Robot');
	echo "<br>";
	clase4::mensajeNacion("whetney indi rock");

 ?>