function peticionAjax(){
	//alert('hola');
	var lista=document.querySelectorAll('option');
	//alert(lista);
	var seleccion="";
	for(var i=0;i<lista.length;i++){
		//alert(i+":"+lista[i].value);
		if(lista[i].selected===true){
			seleccion=lista[i].value;
		}
	}
	//alert(seleccion);
	var xhr=new XMLHttpRequest();
	var contenedor=document.getElementById('contenedor');
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var respuesta=xhr.responseText;
			contenedor.innerHTML=respuesta;
		}
	};
	xhr.open('get','procesaformulario0008.php?s='+seleccion,true);
	xhr.send();
}