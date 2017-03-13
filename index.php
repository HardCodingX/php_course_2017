<?php

echo 'Hello World';

$x = 1.6;
$texto = 'Hola';
$open = true;
echo $open;
$listado = [3 => 1,2,3,4, "Gato", true, 12, [2,3]];

define("CANTIDAD", 4);

echo $texto." hi!";
echo CANTIDAD;

echo '</br>';

echo $listado[4];
echo $listado[7][1];

$materias = [
  "matematicas" => "Pepe",
  "español" => "Juan",
  "Artes" => "José"
];
echo $materias["español"];

print_r($materias);
$arr = print_r($listado, 1);
echo $arr;
?>
