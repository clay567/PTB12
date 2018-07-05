/*function peticion(){
	
	var usuario=document.getElementById("usuario").value;
	var clave=document.getElementById("clave").value;

	var xhr=new XMLHttpRequest();
	var contenedor=document.getElementById('contenedor');
	xhr.onreadystatechange=function(){
		if (xhr.readyState==4 && xhr.status==200) {
			var respuesta=xhr.responseText;
			if(respuesta=="correcto"){
				location.href='admin.php';
			}else{
			contenedor.innerHTML=respuesta;
			//primera forma
			//contenedor.style.display="block";
			//setTimeout(function (){contenedor.style.display="none";},5000);
			
			//segunda forma
			$('#contenedor').slideDown('slow');	
			setTimeout(function(){$('#contenedor').slideUp('slow');},3000);
			}
		}
	};
	xhr.open('get','procesar.php?usuario='+usuario+"&"+'clave='+clave,true);
	xhr.send();
}
*/
function peticion(){
	var usuario=document.getElementById("usuario").value;
	var clave=document.getElementById("clave").value;
	var contenedor=document.getElementById('contenedor');

	$.get('procesar.php',{'usuario':usuario,'clave':clave},function(respuesta){
				if (respuesta=="correcto") {
					location.href='admin.php';
				} else {
					
					//console.log(respuesta);
					$('#contenedor').html(respuesta);
					$('#contenedor').slideDown('slow');	
					setTimeout(function(){$('#contenedor').slideUp('slow');},3000);
				}
				
			});
}

