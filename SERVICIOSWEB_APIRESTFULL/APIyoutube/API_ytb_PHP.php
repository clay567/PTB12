<?
//https://desarrolloweb.com/articulos/api-youtube-php.html
//Este documento es propiedad de Desarrolloweb.com
//Primero de todo cogemos el título del vídeo.
$id = "kEogJacjLTE";
$datos = simplexml_load_file("http://gdata.youtube.com/feeds/api/videos/".$id);
echo "Video:  <a href='http://www.youtube.com/watch?v=".$id."' target='_blank'>".$datos->title."</a>";

//Ahora los comentarios
$datos = simplexml_load_file("http://gdata.youtube.com/feeds/api/videos/".$id."/comments");     
foreach($datos->entry as $comment){
       echo "<div><h3>".$comment->author->name."</h3><span>".$comment->content."</span><br><br></div>";
}
//https://www.youtube.com/watch?v=nYULAk6A9TY
//https://www.youtube.com/watch?v=Vd2AX4pW9xg
?>