function prueba(){
	/*independientemente de si palomeamos la opcion directivo,
	siempre estamos capturando su valor .por tanto en server.php llega informacion...!*/
	var nodoD;
	var nodoT;
	if(document.getElementById('directivo').checked===true){
		nodoD=document.getElementById('directivo').value;
	}
	if(document.getElementById('tecnico').checked===true){
		nodoT=document.getElementById('tecnico').value;
	}
	
	var xhr=new XMLHttpRequest();
	var nodo=document.getElementById('contenedor2');
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var resultado=xhr.responseText;
			nodo.innerHTML=resultado;
		}
	};
	//metodo get  
	//xhr.open("get","server.php?dir="+nodoD+"&"+"tec="+nodoT,true);
	//xhr.send();
	//metodo post ,la cabecera content-type o Content-Type da igual
	xhr.open("POST","server.php?",true);
	xhr.setRequestHeader("content-type","application/x-www-form-urlencoded");
	xhr.send("dir="+nodoD+"&"+"tec="+nodoT);
	
}