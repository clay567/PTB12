function peticionAsincronica(){
	var radio="";
	var formulario=document.getElementById('formulario');	
	if(formulario.colores[0].checked===true){
		radio=formulario.colores[0].value;
		
	}
	if(formulario.colores[1].checked===true){
		 radio=formulario.colores[1].value;
		
	}
	if(formulario.colores[2].checked===true){
		 radio=formulario.colores[2].value;
		
	}
	
	var xhr=new XMLHttpRequest();
	var contenedor=document.getElementById('contenedor');
	
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var respuesta=xhr.responseText;
			contenedor.innerHTML=respuesta;
		}
	};
	xhr.open("get","procesaformulario0006.php?r="+radio,true);
	xhr.send();
}