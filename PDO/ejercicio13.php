
<?php
echo "<h2 style=text-align:center;background-color:#ffbf00>Llamar a un procedimiento almacenado con un parámetro INOUT</h2>";
/* Llamar a un procedimiento almacenado con un parámetro INOUT */
$color = 'red';
$gsent = $gbd->prepare('CALL puree_fruit(?)');
$gsent->bindParam(1, $color, PDO::PARAM_STR|PDO::PARAM_INPUT_OUTPUT, 12);
$gsent->execute();
print("Después de hacer puré la fruta, el color es: $color");
?>
