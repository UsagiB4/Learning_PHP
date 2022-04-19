<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Return Here</title>
</head>
<body>
    <form action="11returnState.php" method="get">
        <input type="number" name="numb1" id="">
    </form>
    <?php
    $userInput = $_GET["numb1"];
    function cube($num){
        $num = pow($num, 3);
        return $num;
    }
    $cubeRes = cube($userInput);
    echo "<h3>$userInput cubed is $cubeRes </h3>"
    ?>
</body>
</html>