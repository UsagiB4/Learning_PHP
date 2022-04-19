<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associate array</title>
</head>
<body>
    <?php
    $grades = array('Jim' => 'A+', 'Abe' => 'A', 'Lita' => 'B+', 'Oscar' => 'C');
    echo $grades['Abe'];
    echo "<br>";
    $grades['Abe'] = 'B';
    echo $grades['Abe'];
    ?>
</body>
</html>