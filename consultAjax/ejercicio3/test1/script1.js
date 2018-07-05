function prueba(){
	
	var nodoD=document.getElementById('directivo');
	var nodoT=document.getElementById('tecnico');
	var nodoE=document.getElementById('empleado');

	var xhr=new XMLHttpRequest();
	var nodo=document.getElementById('contenedor2');
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var resultado=xhr.responseText;
			nodo.innerHTML=resultado;
		}
	};
	xhr.open("get","procesaformulario0005.php?dir="+nodoD+"tec="+nodoT+"emp="+nodoE,true);
	xhr.send();
	
}