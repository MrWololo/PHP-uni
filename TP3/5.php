<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>5</title>
</head>
<body>
<?php 
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

echo ' <br><br>';
echo '<table>';

echo "  <tr>
            <th scope='column'>Nombre</th>
            <th scope='column'>Edad</th>
            <th scope='column'>Sexo</th>
        </tr> 
    ";

foreach ($people as $person) {
    echo "
        <tr>
            <th scope='row'>$person[name]</th>
            <td scope='row'>$person[age]</td>
            <td scope='row' class='sex'>$person[sex]</td>
        </tr>
     ";
}
echo ' </table>';

echo ' <br><br>';
echo '<table>';

echo "  <tr>
            <th scope='column'>Edad</th>
        </tr> 
    ";

foreach ($people as $person) {
    echo "
        <tr>
            <td scope='row'>$person[age]</td>
        </tr>
     ";
}
echo ' </table>';
?>
</body>
</html>