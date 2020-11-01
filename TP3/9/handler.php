<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css?ver=<?php echo rand(
    	111,
    	999
    ); ?>">
</head>

<?php $array = [[]]; ?>

<body>
    <table>
        <tr>
            <th scope="column">Name</th>
            <th scope="column">Age</th>
            <th scope="column">Sex</th>
        </tr>

        <?php
        array_push($array, $_POST);

        foreach ($array as $value) {
        	echo implode(', ', $value);
        }

// foreach ($array as $post) {
// 	echo '<tr>';
// 	echo '<td>' . $post['name'] . '</td>';
// 	echo '<td>' . $post['age'] . '</td>';
// 	echo '<td>' . $post['gender'] . '</td>';
// 	echo '</tr>';
// }
?>


    </table>
</body>

</html>