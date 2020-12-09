<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan soal memperbarui nilai variabel</title>
</head>

<body>
    <?php
    $x = 1;
    $y = 2;
    $a = 3;
    $b = 4;
    ?>

    <!--- perbarui dan cetak variable $x dibawah --->
    <?php $x = $x + 5;
    echo $x; ?>

    <br>

    <!--- perbarui dan cetak variable $y dibawah --->
    <?php $y = $y * 5;
    echo $y; ?>

    <br>

    <!--- perbarui dan cetak variable $a dibawah --->
    <?php $a = $a - 1;
    echo $a; ?>

    <br>

    <!--- perbarui dan cetak variable $b dibawah --->
    <?php $b = $b + 5;
    echo $b; ?>

</body>

</html>