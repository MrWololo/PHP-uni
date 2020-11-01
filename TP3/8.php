<?php
//Ejercicio 8

echo '<br/><br/> 8 <br/>';

$a = rand(0, 1000);
$b = rand(0, 1000);
$c = rand(0, 1000);
$d = rand(0, 1000);

echo 'A: ' . $a . '<br>';
echo 'B: ' . $b . '<br>';
echo 'C: ' . $c . '<br>';
echo 'D: ' . $d . '<br>';

echo '<br/>' . 'Highest: ' . max($a, $b, $c, $d);
?>
