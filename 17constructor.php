<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constructor</title>
</head>
<body>
    <?php
    class human{
        var $name;
        var $age;
        var $color;
        var $height;

        function __construct($pName, $pAge, $pColor, $pHeight){
            $this->name = $pName;
            $this->age = $pAge;
            $this->color = $pColor;
            $this->height = $pHeight;
            echo "Hi! I am $pName<br>";
            echo "I am $pAge years old <br>";
            echo "I'm $pColor<br>";
            echo "I am $pHeight tall<br><br>";

        }
    }

    $ema = new human("Ema", 20, "white", "123cm");
    $joe = new human("Joe", 34, "black", "140cm");
    $adam = new human("Adam", 15, "asian", "140cm");
    ?>
</body>
</html>