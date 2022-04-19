<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method</title>
</head>
<body>
    <form action="6methods.php" method="post">
        Your pass:<input type="password" name="passwd" id="">
    </form>
    <?php
        echo $_POST["passwd"];
    ?>
</body>
</html>