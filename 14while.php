<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>While LOOP</title>
</head>
<body>
    <form action="14while.php" method="post">
        <input type="number" name="userInput" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
        $uInp = $_POST["userInput"];
        $starter = 0;
        while($starter <= $uInp){
            echo "<pre>counting $starter</pre>";
            $starter++;
        }
    ?>
</body>
</html>