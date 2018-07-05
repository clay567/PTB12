<?php 
	function __autoload($nombre){
		include $nombre.'.php';
	}
$objclass1=new clase1();
$objclass2=new clase2();
/*
Por lo tanto, si llama a una clase que se denomina myClass, entonces se incluirá un archivo myClass.php si existe (si no se obtiene un error de inclusión normalmente). Si llama a Foo, Foo.php se incluirá, y así sucesivamente ...
*/

 ?>