<?php 
//Ejercicio 7

echo '<br/> 7 <br/>';

$totalArray = [750.55, 47, 339, 129, 2600, 1204, 14];
$typeArray = ['Mascotas', 'Ropa'];

$typeSale = $typeArray[array_rand($typeArray)];
$totalSale = $totalArray[array_rand($totalArray)];

echo $typeSale . '<br>';
echo $totalSale . '<br>';

function message($total, $type)
{
    if (!($total < 200)) {
        if (!($total >= 200 && $total < 600)) {
            if ($total >= 600) {
                if ($total > 2000) {
                    return 'Codigo de Descuento: CODEDESC33';
                }
                return 'Envio gratis';
            }
        } else {
            return 'Los gastos del envio son 80$';
        }
    } else {
        if ($type == 'Mascotas') {
            return 'No se puede realizar el envio';
        } else {
            return 'Los gastos del envio son 80$';
        }
    }
}

echo message($totalSale, $typeSale);
?>