<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="calculator.php" method="get">
        <input type="number" name="num1" value="">
        <input type="number" name="num2" value="">
        <input type="submit" value="add">
    </form>
    <?php
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];
    $result = $num1 + $num2;
    echo "<h4>$num1 + $num2 = $result </h4>";
    ?>
</body>
</html>