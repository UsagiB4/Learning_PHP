<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CheckBox</title>
</head>
<body>
    <form action="8checkbox.php" method="post">
        Apple: <input type="checkbox" name="fruits[]" value="apple"><br>
        Banana: <input type="checkbox" name="fruits[]" value="Banana"><br>
        Orange: <input type="checkbox" name="fruits[]" value="Orange"><br>
        Melon: <input type="checkbox" name="fruits[]" value="Melon"><br>


        <input type="submit" value="Submit">
    </form>

    <?php
        $fruits = $_POST["fruits"];
        echo $fruits[1];
    ?>
</body>
</html>