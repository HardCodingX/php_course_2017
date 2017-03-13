<?php

$a = 2;
$b = 5;
$c = 5;
$d = 10;

echo $a > $b;
echo $a < $b;
echo $a >= $b;
echo $a <= $b;
echo $a == $b;

if (($a == $b) && ($c < $d)) {
  echo 'Es igual';
} else {
  echo 'No es igual';
}


//---

echo ($a == $b) || ($c < $d);

?>
