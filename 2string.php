<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>string</title>
</head>
<body>
    <?php
    $upperString = "HELLO WORLD";
    $lowerString = "you are small";

    echo strtolower($upperString);
    echo "<br>";
    echo strtoupper($lowerString);
    echo "<br>";
    echo $upperString[4];
    echo "<br>";
    $lowerString[0] = "I";
    echo $lowerString;
    echo "<br>";
    echo substr($lowerString, 2, 5);
    echo "<br>";
    echo str_replace("HELLO", "GOODBYE", $upperString);
    
    ?>
</body>
</html>