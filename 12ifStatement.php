<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="12ifStatement.php" method="post">
        <input type="text" name="cond">
        <input type="submit" name="Submit">
    </form>
    <?php
        $userCondition = $_GET["cond"];
        if ($userCondition == "Morning" ){
            echo "<h2>Good Morning</h2>";
        }
        elseif($userCondition == "Noon"){
            echo "Did you have your meal?";
        }
        else{
            echo "sorry wrong param";
        }
    ?>
</body>
</html>