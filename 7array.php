<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
        $names = array("Jack", "Ahmed", "Bob", "Kim", "Jim", "Anna");

        $names[3] = "Noman";
        echo $names[3];
        echo '<br>';
        echo count($names);
        echo '<br>';
        $names[6] = "Dave";
        echo $names[6];
        echo '<br>';
        echo count($names);
    ?>
</body>
</html>