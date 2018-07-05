<?
//Este documento es propiedad de Desarrolloweb.com
$xml = "https://gdata.youtube.com/feeds/api/videos?q=web&license=cc&duration=medium&v=2"; //url de la api a consultar
$datos = simplexml_load_file($xml); //lo cargo como archivo xml

//mostramos de cada video diferentes datos

foreach($datos->entry as $video){

   echo "<div><h3>".$video->author->name."</h3>
   <span>Publicado el: ".$video->published."</span><br>
   <span>Titulo: ".$video->title."</span><br>
   <span>Palabras clave: ".$video->children("media",true)->group->keywords."</span><br>
   <span>Descripcion: ".$video->children("media",true)->group->description."</span><br>
   <br><br></div>";
}


?>
