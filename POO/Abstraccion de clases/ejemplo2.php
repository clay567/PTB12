<?php
echo "<h1 style=background-color:#ffbf00;text-align:center>ejemplo de clase abstracta</h1>";
abstract class ClaseAbstracta
{
    // El método abstracto sólo necesita definir los argumentos requeridos
    abstract protected function nombrePrefijo($nombre);

}

class ClaseConcreta extends ClaseAbstracta
{

    // La clase derivada puede definir parámetros opcionales que no estén en la estructura del prototipo
    public function nombrePrefijo($nombre, $separador = ".") {
        if ($nombre == "Pacman") {
            $prefijo = "Mr";
        } elseif ($nombre == "Pacwoman") {
            $prefijo = "Mrs";
        } else {
            $prefijo = "";
        }
        //tecnica para retornar varias variables con un solo return
        //return "{$prefijo}{$separador} {$nombre}";
        return "$prefijo $separador $nombre";
        //return $prefijo $separador $nombre;
    }
}

$clase = new ClaseConcreta;
echo $clase->nombrePrefijo("Pacman"), "<br>";
echo $clase->nombrePrefijo("Pacwoman"), "<br>";
?>
