<?php
echo "<h1 style=background-color:#ffbf00;text-align:center>ejemplo de clase abstracta</h1>";
abstract class ClaseAbstracta
{
    // Forzar la extensión de clase para definir este método
    abstract protected function getValor();
    abstract protected function valorPrefijo($prefijo);

    // Método común
    public function imprimir() {
        print $this->getValor() . "\n";
    }
}

class ClaseConcreta1 extends ClaseAbstracta
{
    protected function getValor() {
        return "ClaseConcreta1";
    }

    public function valorPrefijo($prefijo) {
        return "{$prefijo}ClaseConcreta1";
    }
}

class ClaseConcreta2 extends ClaseAbstracta
{
    public function getValor() {
        return "ClaseConcreta2";
    }

    public function valorPrefijo($prefijo) {
        return "$prefijo ClaseConcreta2";
    }
}

$clase1 = new ClaseConcreta1;
$clase1->imprimir();
print "<br>";
echo $clase1->valorPrefijo('FOO_') ."<br>";
print("<br>");

$clase2 = new ClaseConcreta2;
$clase2->imprimir();
print("<br>");
echo $clase2->valorPrefijo('FOO_') ."<br>";
?>
