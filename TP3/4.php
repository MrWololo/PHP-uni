<?php
//Ejercicio 4

echo '<br/> 4 <br/>';

$array = [
	1 => 'first value',
	2 => 'second value',
	3 => 'tirth value',
	4 => 'fourth value',
	5 => 'fifth value',
	6 => 'sixth value',
];

echo 'Array count: ' . count($array) . '<br>';

$arrayAmount = 0;

echo 'content: ' . $array[2] . '<br>';

foreach ($array as $key => $value) {
	$arrayAmount++;
	echo 'Array Amount: ' . $arrayAmount . '<br>';
}
?>
