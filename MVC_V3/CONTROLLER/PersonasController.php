<?php 
include('MODEL/PersonasModel.php');

class PersonasController{
	private $PersonasModel=NULL;
	
	public function __construct(){
		$this->PersonasModel=new PersonasModel();
	}

	public function handleRequest(){
		$accion=isset($_GET['accion'])?$_GET['accion']:NULL;
		switch($accion){
			case NULL:
				$this->listPersonas();
				break;
			case 'delete':
				$this->deletePersonas();
				break;
			case 'update':
				$this->updatePersonas();
				break;
			case 'create':
				$this->createPersonas();
				break;
			case 'show':
				$this->showPersonaByID();
				break;
		}
	}

	public function listPersonas(){
		$mysqli_result=$this->PersonasModel->listPersonas();
		include('VIEW/personas.php');
	}

	public function deletePersonas(){
		$id=isset($_GET['id'])?$_GET['id']:NULL;
		if(!$id){
			throw new Exception("Error Processing Request", 1);
		}
		$this->PersonasModel->deletePersonas($id);
		header('location:index.php');
	}

	public function showPersonaByID(){
		$id=isset($_GET['id'])?$_GET['id']:NULL;
		if(!$id){
			throw new Exception("Error Processing Request", 1);
		}
		$fila=$this->PersonasModel->showPersonaByID($id);
		include('VIEW/update-form.php');
	}
	
	public function updatePersonas(){
		$id=isset($_GET['id'])?$_GET['id']:NULL;
		$nombre=isset($_POST['nombre'])?$_POST['nombre']:NULL;
		$correo=isset($_POST['correo'])?$_POST['correo']:NULL;
		$telefono=isset($_POST['telefono'])?$_POST['telefono']:NULL;
		$estado_civil=isset($_POST['estado_civil'])?$_POST['estado_civil']:NULL;
		$hijos=isset($_POST['hijos'])?$_POST['hijos']:NULL;
		$intereses=isset($_POST['intereses'])?$_POST['intereses']:NULL;

		$this->PersonasModel->updatePersona($id,$nombre,$correo,$telefono,$estado_civil,$hijos,$intereses);
		header('location:index.php');
	}

	public function createPersonas(){
		$nombre="";
		$correo="";
		$telefono="";
		$estado_civil="";
		$hijos="";
		$intereses="";
		if(isset($_POST['form-submited'])){
			$nombre=isset($_POST['nombre'])?$_POST['nombre']:NULL;
			$correo=isset($_POST['correo'])?$_POST['correo']:NULL;
			$telefono=isset($_POST['telefono'])?$_POST['telefono']:NULL;
			$estado_civil=isset($_POST['estado_civil'])?$_POST['estado_civil']:NULL;
			$hijos=isset($_POST['hijos'])?$_POST['hijos']:NULL;
			$intereses=isset($_POST['intereses'])?$_POST['intereses']:NULL;

			$this->PersonasModel->createPersonas($nombre,$correo,$telefono,$estado_civil,$hijos,$intereses);
			header('location:index.php');
		}else{
			include('VIEW/person-form.php');	
		}
	}

}

 ?>