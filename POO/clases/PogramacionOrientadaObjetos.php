<?php	
	//acceso a atributos y metodos de una clase
	echo '<h1 style=background-color:#ffbf00;text-align:center>acceso a atributos y metodos de una clase, uso de $this
	</h1>';
	class MiClase2{
		private $sobrenombre="texas";
		public $mensaje="stranger things today new chapter session 2";
		function bienvenida(){
			return $this->mensaje.' '.$this->sobrenombre;
		}
	}

	echo '<h3>'."Mi Clase2".'</h3>';
	$objeto2=new MiClase2();
	var_dump($objeto2);
	echo "<br>";
	//no puedes acceder a una propiedad privada
	//echo $objeto2->sobrenombre;

	//accediendo a la variable(propiedad) desde el exterior de la clase dandole nuevo valor
	echo  'nuevo valor de la propiedad mensaje :'.$objeto2->mensaje="las aguilas",'<br>';

	//accediendo al metodo de la clase
	$resultado=$objeto2->bienvenida();
	print 'resultado devuelto por la funcion :'.$resultado;

	//METODO CONSTRUCT DE CLASE
	echo "<h1 style=background-color:#ffbf00;text-align:center>uso del metodo contruct</h1>";
	class MiClase3 {
		var $nombre;
		/*no es posible declarar un constructor con parametros y sin parametros en la misma clase
		por que seria como si estuvieses volviendo a declarar el constructor es decir no puedes redeclarar genera error fatal, ademas recuerde por defecto php permite crear objetos de clase aunque no tuvieses declarado explicitamente un costructor.*/
		/*function __construct(){
			echo "hola";	
		}*/
		function __construct($nombreuser) {
			$this->nombre=$nombreuser;		
		}
		function Suma_Numero($numero1,$numero2){
			return $numero1+$numero2;
		}
		/*tampoco se puede redeclarar funciones dentro de una clase genera error fatal, la solucion se encuentra en la teoria de espacios de nombres*/
		/*function Suma_Numero($x,$y,$z){
			return $x+$y+$z;
		}*/
	}
	echo '<h3>'."Mi Clase3".'</h3>';
	$objeto3=new MiClase3("hannah baker");
	//$objeto3=new MiClase3();
	echo "<br>";
	print_r($objeto3);
	echo "<br>";
	var_dump($objeto3);
	echo "<br>";
	echo 'valor de la propiedad $nombre:'.$objeto3->nombre,'<br>';
	echo 'valor devuelto por la funcion suma_numero:'.$objeto3->Suma_Numero(10,8);
	//echo 'valor devuelto por la funcion suma_numero:'.$objeto3->Suma_Numero(4,5,6);

	//uso de new self()
	echo "<h1 style=background-color:#ffbf00;text-align:center>uso de new self()</h1>";
	class MiClase4 {
		//var sinonimo de public
		var $edad=69;
		static $profesion="ingeniero de la estacion espacial internacional";
		static function instancia() {
			return new self();
		}
	}
	echo '<h3>'."Mi Clase4".'</h3>';
	$objeto4=MiClase4::instancia();
	var_dump($objeto4);
	echo "<br>";
	echo $objeto4->edad,'<br>';
	print MiClase4::$profesion;

	//USO DE CONSTANTES
	echo "<h1 style=background-color:#ffbf00;text-align:center>definicion y uso de constantes</h1>";
	class MiClase1
	{
	    const CONSTANTE = 'valor constante';

	    function mostrarConstante() {
	        echo  self::CONSTANTE . "\n";
	    }
	}

	echo MiClase1::CONSTANTE . "<br>";

	$nombreclase = "MiClase1";
	echo $nombreclase::CONSTANTE . "<br>"; // A partir de PHP 5.3.0

	$clase = new MiClase1();
	$clase->mostrarConstante();
	echo "<br>";
	echo $clase::CONSTANTE."<br>"; // A partir de PHP 5.3.0

	echo "<h1 style=background-color:#ffbf00;text-align:center>uso de variables estaticas y constantes uso de self static ,la herencia y el uso de parent:: </h1>";
	class MiClase {
		const constante=15;
		static $nombreUsuario="clay jensen";
		function function_name() {
			print self::constante;
			print static::$nombreUsuario;
		}	
	}
	echo 'acceso al valor de una constante y propiedad static:'.MiClase::constante.''.MiClase::$nombreUsuario,'<br>';
	$objeto=new MiClase();
	$objeto->function_name();
	echo "<br>";

	class SubClase extends MiClase
	{
		function Acceso(){
			echo parent::constante.''.parent::$nombreUsuario;
		}
	}
	$objetoPrueba=new SubClase();
	$objetoPrueba->Acceso();

	
	//FUNCIONES DESCRIPTORES DEACCESO
	echo "<h1 style=background-color:#ffbf00;text-align:center>funciones descriptores de acceso usando metodos magicos __get y __set</h1>";
	class MiClase5{
		private $peliculafavorita;
		function __get($name) {
			return $this->name;
		}
		function __set($name,$value) {
			$this->name=$value;
		}
		
	}
	echo '<h3>'."Mi Clase5".'</h3>';
	$objeto5=new MiClase5();
	var_dump($objeto5);
	echo "<br>";
	/*esta instruccion invoca implicitamente la funcion __set,recuerde que antes no se podia acceder a una variable privada desde el exterior de la clase pero al usar funciones descriptores de acceso si podremos acceder y obtener su valor y cambiarlo si lo deseamos*/
	$objeto5->peliculafavorita="HER(ella)";
	var_dump($objeto5);
	print 'esta instruccion invoca implicitamente la funcion __get: '.$objeto5->peliculafavorita;


	echo "<h1 style=background-color:#ffbf00;text-align:center>funciones descriptores de acceso sin usar metodos magicos sino metodos propios</h1>";
	class MiClase6 {
		private $tvserie;
		function gettvserie() {
			return $this->tvserie;
		}
		function settvserie($value) {
			$this->tvserie=$value;
		}
	}
	echo '<h3>'."Mi Clase6".'</h3>';
	$objeto6=new MiClase6();
	var_dump($objeto6);
	echo "<br>";
	$objeto6->settvserie("Mr.Robot");
	var_dump($objeto6);
	echo $objeto6->gettvserie();


	//uso de const,public,private,protected,static y el operador de resolucion de ambito ::
	class superclase{
		const dni=12345678;
		public $nombre="hannah baker";
		private $cuentabancaria=567;
		protected $cuentanetflix="eliot anderson";
		static $grupofavorito="bauhaus";
		function __construct(){
			echo "hola acabas de crear un objeto ,por eso ves este mensaje";
		}
		public function rockola(){
			echo self::dni."<br>";
			echo static::dni."<br>";
			echo "valor propiedad publica nombre: ".$this->nombre."<br>";
			echo "valor propiedad privada cuentabancaria: ".$this->cuentabancaria."<br>";
			echo "valor propiedad protected cuentanetflix: ".$this->cuentanetflix."<br>";
			//forma incorrecta de llamar una variable static
			//echo $this->grupofavorito; 
			echo "valor propiedad estatica grupofavorito: ".static::$grupofavorito."<br>";
			echo "valor propiedad estatica grupofavorito: ".self::$grupofavorito."<br>";
		}
		private function saldo(){
			echo "500000 soles de saldo ,por tanto aun eres rico mother fucker";
		}
		protected function numerosegurosocial(){
			echo "123";
		}
		public static function Maraton(){
			echo "sistemas uni big data for love";
			//print $this->nombre;
		}
	}

	echo "<h1 style=background-color:#ffbf00;text-align:center>uso de const,public,private,protected,static y el operador de resolucion de ambito ::</h1>";
	$objsuperclase=new superclase();
	print("<br>");
	echo superclase::dni;
	print "<br>";
	echo $objsuperclase->nombre;
	//$objsuperclase->cuentabancaria;
	//$objsuperclase->cuentanetflix;
	print "<br>";
	echo superclase::$grupofavorito;
	print "<br>";
	$objsuperclase->rockola();
	superclase::Maraton();
	

	
?>