<?php 
$url="https://maps.googleapis.com/maps/api/timezone/json?location=39.6034810,-119.6822510&timestamp=1331161200&key=AIzaSyAzoL4ZX16l4SJH6MTP0nKLxAntXJu_uEc";
$url=urlencode($url);	
$json=file_get_contents($url,true);
$array=json_decode($json,true);
var_dump($array);
 ?>