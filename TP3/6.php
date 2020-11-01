<?php
//Ejercicio 6

echo '<br/> 6 <br/>';

if (date('D') == 'Sat' || date('D') == 'Sun') {
	echo 'Es fin de semana';
} else {
	echo 'El dia de la semana es: ' . date('l');
}

echo '<br/>';
?>
