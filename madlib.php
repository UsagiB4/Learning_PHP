<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mad lib game</title>
</head>
<body>
    <form action="madlib.php" method="get">
        <h5>Color: <input type="text" name="color" value=""></h5>
        <h5>Noun: <input type="text" name="Noun" value=""></h5>
        <h5>Name: <input type="text" name="Name" value=""></h5>
        <input type="submit">
    </form>

    <?php
        $color = $_GET["color"];
        $noun = $_GET["Noun"];
        $name = $_GET["Name"];

        echo "The color of the flower is $color<br>";
        echo "I love $noun <br>";
        echo "My name is $name <br>";
    ?>
</body>
</html>