<?php 
	//REEMPLAZO
	echo "<h1 style=background-color:#ffbf00;text-align:center>reemplazo</h1>";
	class MiClase9 {
		public $edad=15;
		const constante="puente de espias";
		function operacion() {
			echo self::constante;
		}
	}

	class MiClase10 extends MiClase9 {
		//public $edad=20;
		//redefinidendo el metodo operacion de la clase padre
		function operacion() {
			//uso valido del parent solo para constantes y operaciones de la superclase.
			//forma correcta de invocar el metodo redefinido de la clase padre dentro de la clase hija, se hace uso de parent::
			//Maximo nivel de anidacion 100 ,no lo olvides
			parent::operacion();
			echo "<br>";
			//incorrecto genera fatal error
			//echo $this->operacion().'<br>';
			echo parent::constante;
		}
	}
	echo '<h3>'."Mi Clase10".'</h3>';
	$objeto10=new MiClase10();
	$objeto10->operacion();
 ?>