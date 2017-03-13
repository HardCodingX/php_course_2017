<?php

for ($i = 1; $i <= 10; $i++) {
  echo $i.'</br>';
}

for ($i = 20; $i >= 1; $i -= 2) {
  echo $i.'</br>';
}

$es_noche = false;
while ($es_noche == false) {
  echo 'No es de noche';
  $es_noche = true;
}

$es_dia = true;
do {
  echo 'No es de dia';
  $es_dia = true;
} while ($es_dia == false);

$animales = new array('gatos', 'conejos', 'pajaros', 'perros', 'hamsters');

foreach ($animales as $k => $v) {
  echo $k . ' ' . $v . '</br >';
}

for ($x = 0; $x < count($animales); $x++) {
  echo $x . ' ' . $animales[$x] . '</br >';
}

?>
