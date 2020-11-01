<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css?ver=<?php echo rand(
    	111,
    	999
    ); ?>">
    <title>9</title>
</head>

<body>

    <div class="bodyWrapper">
        <form method="post">
            <label>Name</label><input type="text" name="name" id="id_name">
            <label>Age</label><input type="number" name="age" id="id_age">
            <label>Sex</label>

            <div class="sexWrapper">
                <label>Male</label> <input type="radio" name="gender" id="id_sex_m">
                <label>Female</label> <input type="radio" name="gender" id="id_sex_f">
            </div>

            <br>

            <button type="submit">Submit</button>



        </form>

        <?php require_once 'handler.php'; ?>
    </div>

</body>

</html>