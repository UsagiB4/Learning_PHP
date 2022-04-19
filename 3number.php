<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>number</title>
</head>
<body>
    <?php
    echo "<h1>this is working</h1>";
    $numberA = 20;
    $numberB = -10;
    $numberC = 3.14;
    echo $numberA - $numberB;
    echo "<br>";
    echo $numberC * 2;
    echo "<br>";
    echo 10 % 3;
    echo "<br>";
    $numberA++;
    echo $numberA;
    echo "<br>";
    $numberC += 4;
    echo $numberC;

    // math functions___________
    echo "<br>";
    echo abs(-2342);
    echo "<br>";
    echo pow(5, 2);

    echo "<br>";
    echo max(34, 56);
    echo "<br>";
    echo min(2, 4);

    echo "<br>";
    echo round($numberC);
    echo "<br>";
    echo ceil(4.33);
    echo "<br>";
    echo floor(4.33);

    ?>
</body>
</html>