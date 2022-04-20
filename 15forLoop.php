<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $friends = ["Adam", "Josh", "Abe", "Julia", "Ada"];
    for($i = 0; $i < count($friends); $i++){
        echo "<pre> <h1>$friends[$i]</h1> </pre>";
    }
    ?>
</body>
</html>