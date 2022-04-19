<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>URL param</title>
</head>
<body>
    <form action="5urlparam.php" method="get">
        Your name: <input type="text" name="uname" value="">
    </form>
    
    <?php
        echo $_GET["uname"];
    ?>
</body>
</html>