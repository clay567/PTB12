<?php 

class PersonasModel{
	
	public $mysqli=NULL;
	
	public function __construct(){
		$this->mysqli=new mysqli("localhost","root","","personal");
	}

	public function listPersonas(){
		$consulta="select * from personas";
		$mysqli_result=$this->mysqli->query($consulta);
		return $mysqli_result;
	}

	public function deletePersonas($id){
		$consulta="delete from personas where id=$id";
		$this->mysqli->query($consulta);
	}

	public function createPersonas($nombre,$correo,$telefono,$estado_civil,$hijos,$intereses){
		$consulta="insert personas(nombre,correo,telefono,estado_civil,hijos,intereses) values('$nombre','$correo','$telefono','$estado_civil','$hijos','$intereses')";
		$this->mysqli->query($consulta);
	}

	public function showPersonaByID($id){
		$consulta="select * from personas where id=$id";
		$mysqli_result=$this->mysqli->query($consulta);
		$row=$mysqli_result->fetch_assoc();
		return $row;
	}

	public function updatePersona($id,$nombre,$correo,$telefono,$estado_civil,$hijos,$intereses){
		$consulta="update personas set nombre='$nombre',correo='$correo',telefono='$telefono',estado_civil='$estado_civil',hijos='$hijos',intereses='$intereses' where id=$id";
		$this->mysqli->query($consulta);
		
	}

}

 ?>