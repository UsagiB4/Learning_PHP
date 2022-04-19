<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input fro Users</title>
</head>
<body>
    <form action="4input.php" method="get">
        <input type="text" name="userName" value=" ">
        <input type="submit" name="Submit" value="Submit">
    </form>
    <?php
        $user_name =  $_GET["userName"];
        echo "<h1><span>$user_name</span></h1>"
    ?>
</body>
</html>