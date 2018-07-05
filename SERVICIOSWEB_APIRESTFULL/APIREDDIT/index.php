<?php

$url='filesjson/colores3.json';
$data=file_get_contents($url);
$feed=json_decode($data,true);
//print_r($feed);
foreach($feed as $key => $value){
    for($i=0;$i<count($value);$i++){
        echo $value[$i]['nombreColor']."-".$value[$i]['valorHexadec'].'<br>';
    }
}

$url2='filesjson/data2.json';
$data2=file_get_contents($url2);
$feed2=json_decode($data2,true);
//print_r($feed2);
echo "<br>";
foreach($feed2 as $key => $value){
    foreach ($value as $key2 => $value2) {
        if ($key2=='Result') {
            /*for($i=0;$i<count($value2);$i++){
                if($value2[$i]['Thumbnail']);
            }*/
            foreach($value2 as $key3 => $value3){
                foreach ($value3 as $key4 => $value4) {
                    /*if($key4!='Thumbnail'){
                        echo $key4."-".$value4.'<br>';
                    }*/
                    if($key4=='Thumbnail'){
                        foreach ($value4 as $key5 => $value5) {
                            echo $key5."-".$value5.'<br>';     
                        }
                    }
                }
            }
        }
    }
}
/*
videos a ver
leer archivo de excel desde php
leer archivo de excel(google docs) y obtener json 
*/
//https://www.youtube.com/watch?v=4Sw24E5Hi5M 
//https://www.youtube.com/watch?v=0ozxKvz-TsY

/*la url contiene el caracter / este no genera problemas el que si debemos tener cuidado es el \ */
/*
utilizado para construir la url
https://docs.google.com/spreadsheets/d/1gB_mIPOxUZa8mauOS88aZE-9vhBvuvtuG8hdOzLyOwQ/edit#gid=0
*/
/*$url="https://spreadsheets.google.com/feeds/list/1gB_mIPOxUZa8mauOS88aZE-9vhBvuvtuG8hdOzLyOwQ/1/public/values?alt=json";
$result=file_get_contents($url);
print_r($result);*/
//Warning: file_get_contents(): Unable to find the wrapper &quot;https&quot; - did you forget to enable it when you configured PHP? in C:\wamp\www\PRUEBAS\EXAAPIREDDIT\index.php on line 48
?>
