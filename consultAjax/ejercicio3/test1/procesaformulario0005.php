<?php
if ($_POST) {
	
	if (!isset($_POST['puesto_directivo']) && !isset($_POST['puesto_tecnico']) && !isset($_POST['puesto_empleado'])) {
		$respuesta="no selecciono una opcion ...!";
		header("location:Formulario0005.php?r=$respuesta");
	} else {
		$respuesta=" ";
		foreach($_POST as $key=>$value){
			if(isset($_POST['puesto_directivo']) && $_POST['puesto_directivo']==$value){
			
			$respuesta .= $_POST['puesto_directivo'];

			}
			if(isset($_POST['puesto_tecnico']) && $_POST['puesto_tecnico']==$value){
			
			$respuesta .= $_POST['puesto_tecnico'];
			
			}
			if(isset($_POST['puesto_empleado']) && $_POST['puesto_empleado']==$value){
			?>
			
			<?php 
				
				$respuesta .= $_POST['puesto_empleado'];
			?>
			
			<?php 
			}
		}
		header("location:Formulario0005.php?r=$respuesta");
	}

} else {
	echo "variable no definida";
}

?>