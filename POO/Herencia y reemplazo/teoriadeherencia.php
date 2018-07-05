<?php 
	//HERENCIA
	//heredando el metodo construct
	echo "<h1 style=background-color:#ffbf00;text-align:center>metodo construct, uso de parent::__contruct() en la herencia </h1>";
	class AnotherClass{

		function __construct(){
			print "Metodo construct de la clase padre";
		}

	}
	class ClassName extends AnotherClass{
				
	}
	new ClassName();
	echo "<br>";

	class A{
		function __construct($mensaje){
			echo "$mensaje";
		}
	}
	class B extends A{

	}
	new B('invocaste el metodo construct de la clase padre');
	echo "<br>";

	//uso de parent:: __contruct()
	class BaseClass {
	   function __construct() {
	       print "constructor de la clase base";
	   }
	}
	//si la clase hija define su propio constructor entonces el metodo contruct de la clase padre no sera invocado implicitamente ,si queremos invocarlo devemos hacer uso de parent::__construct()
	class SubClass extends BaseClass {
	   function __construct() {
	   		print "invocaste el constructor de la SubClass y el ";
	       	parent::__construct();
	   }
	}

	$obj = new SubClass();
	var_dump($obj);
	print '<br>';

	//uso de protected en la herencia
	echo "<h1 style=background-color:#ffbf00;text-align:center>uso de protected en la herencia</h1>";
	class MiClase7 {
		protected $sueldo=5000;
		function enviarvariable() {
			return $this->sueldo;
		}
	}
	echo '<h3>'."Mi Clase7 la SuperClase".'</h3>';
	$objeto7=new MiClase7();
	echo 'acceso al valor de una propiedad protected no directamente sino a traves de una funcion publica: '.$objeto7->enviarvariable();
	/*no se puede acceder a una propiedad protegida desde fuera de la clase,
	solo se accede a traves de la superclase o de su subclase*/
	//echo $objeto7->sueldo;
	class MiClase8 extends MiClase7{
		Private $capital=2000;
		function calcularmonto() {
			return $this->capital+$this->sueldo;
		}
	}
	echo '<h3>'."Mi Clase8 la SubClase:".'</h3>';
	$objeto8=new MiClase8();
	echo 'suma de valores de las propiedades capital(privado) y sueldo(protected):'.$objeto8->calcularmonto();


//heredando el metodo magico __contruct():primera forma
	echo "<h1 style=background-color:#ffbf00;text-align:center>Herencia de constructores : primera forma, uso de new parent()</h1>";
	
	class AnotherClass1{
		public $nombre;
		public $apellido;
		public $edad;
		function __construct($nombre="hannah",$apellidos="baker jensen",$edad=18){
			$this->nombre=$nombre;
			$this->apellido=$apellidos;
			$this->edad=$edad;
		}
	}

	class ClassName1 extends AnotherClass1
	{
		//public $puesto;
		/*function __construct($puestolaboral)
		{
			parent::__construct("hannah","jensen",19);
			$this->puesto=$puestolaboral;
		}*/
		function instanciar(){
			return new parent('clay','baker',19);
		}
	}
	/*$obj=new ClassName1('ingeniero informatico');
	echo $obj->nombre.'<br>';
	echo $obj->apellido.'<br>';
	echo $obj->edad.'<br>';
	echo $obj->puesto;*/
	$obj=new ClassName1();
	var_dump($obj);
	echo "<br>";
	$obj2=$obj->instanciar();
	echo $obj2->nombre.'<br>';
	echo $obj2->apellido.'<br>';
	echo $obj2->edad.'<br>';
//$nombre="hannah",$apellidos="baker jensen",$edad=18

	
//heredando el metodo magico __contruct():segunda forma
	echo "<h1 style=background-color:#ffbf00;text-align:center>Herencia de constructores : segunda forma,uso de parent::__construct()</h1>";
	class AnotherClass2{
		public $nombre;
		public $apellido;
		public $edad;
		function __construct($nombre="hannah",$apellidos="baker jensen",$edad=18){
			$this->nombre=$nombre;
			$this->apellido=$apellidos;
			$this->edad=$edad;
		}
	}
	class ClassName2 extends AnotherClass2
	{
		public $puesto;
		function __construct($puestolaboral)
		{
			parent::__construct("madmax","chapman",30);
			$this->puesto=$puestolaboral;
		}
		/*function instanciar(){
			return new parent('clay','baker',19);
		}*/
	}
	$obj=new ClassName2('ingeniero informatico');
	echo $obj->nombre.'<br>';
	echo $obj->apellido.'<br>';
	echo $obj->edad.'<br>';
	echo $obj->puesto;
	/*$obj=new ClassName1();
	$obj2=$obj->instanciar();
	echo $obj2->nombre.'<br>';
	echo $obj2->apellido.'<br>';
	echo $obj2->edad.'<br>';*/
//$nombre="hannah",$apellidos="baker jensen",$edad=18
	
 ?>