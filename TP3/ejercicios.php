<?php
//Ejercicio 1
$myNumber = 123;
$numberString = '123';

echo '1 <br/>';

echo 'a) ' . ($myNumber + $numberString) . '<br>';

echo 'b) ' . ($numberString + $myNumber) . '<br>';

echo 'c) ' . ($myNumber . $numberString) . '<br>';

//Ejercicio 2

echo '<br/> 2 <br/>';

if (1 == '1') {
	echo 'a is right . <br/>';
}
if (1 === '1') {
	echo 'b is right . <br/>';
}
if (!null) {
	echo 'c is right . <br/>';
}
if (!false) {
	echo 'd is right . <br/>';
}
if ('') {
	echo 'e is right . <br/>';
}
if (' ') {
	echo 'f is right . <br/>';
}
if ('tested') {
	echo 'g is right . <br/>';
}
if (1 - 1) {
	echo 'h is right . <br/>';
}

//Ejercicio 3

echo '<br/> 3 <br/>';

function multiply($value, $amount)
{
	return $value * $amount;
}

function divide($value, $amount)
{
	return $value / $amount;
}

echo 'Multiplication: ' . multiply(4, 4) . '<br>';
echo 'Division: ' . divide(4, 4) . '<br>';

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

//Ejercicio 5

echo '<br/> 5 <br/>';
$people = [
	['name' => 'Martin', 'age' => 18, 'sex' => 'm'],
	['name' => 'Martina', 'age' => 25, 'sex' => 'f'],
	['name' => 'Pablo', 'age' => 27, 'sex' => 'm'],
	['name' => 'Paula', 'age' => 12, 'sex' => 'f'],
	['name' => 'Alexis', 'age' => 8, 'sex' => 'm'],
	['name' => 'Jacinta', 'age' => 33, 'sex' => 'f'],
	['name' => 'Epifania', 'age' => 45, 'sex' => 'f'],
];

function showResults($title, $filteredArray)
{
	echo $title . ': [ - ';
	foreach ($filteredArray as $person) {
		foreach ($person as $key => $value) {
			if ($key == 'name') {
				echo $value . ' - ';
			}
		}
	}
	echo ']';
}

showResults(
	'Mayores de edad',
	array_filter($people, function ($value) {
		return $value['age'] >= 18;
	})
);

echo '<br>';

showResults(
	'Mujeres menores de edad',
	array_filter($people, function ($value) {
		return $value['sex'] == 'f' && $value['age'] < 18;
	})
);

?>
