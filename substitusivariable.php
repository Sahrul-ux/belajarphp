<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Substitusi Variable</title>
</head>

<body>

    <!--- diganti dengan nilai dari $name --->
    <?php
    $name = 'Hello World';
    echo "Morning, {$name}";

    ?>

    <!---- dicetak sebagai string -->
    <br>

    <?php
    echo 'Hallo, {$name}';

    ?>

</body>

</html>