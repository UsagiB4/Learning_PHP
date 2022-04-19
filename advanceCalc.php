<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advance Calculator</title>
</head>
<body>
    <form action="advanceCalc.php" method="get">
        <input type="number" name="numA" id="">
        <br>
        <br>
        <input type="number" name="numB" id="">
        <br>
        <br>
        
        <input type="checkbox" name="Operation" value="+"> +
        <br>
        <input type="checkbox" name="Operation" value="-"> -
        <br>
        <input type="checkbox" name="Operation" value="*"> x
        <br>
        <input type="checkbox" name="Operation" value="/"> /
        <br>
        <input type="submit" value="Submit">

        
    </form>
    <?php
    $numA = $_GET["numA"];
    $numB = $_GET["numB"];
    
    if($_GET["Operation"] == "+"){
        $result = $numA + $numB;
        echo "<h3>$numA + $numB = $result";
    }
    elseif($_GET["Operation"] == "-"){
        $result = $numA - $numB;
        echo "<h3>$numA - $numB = $result";
    }
    elseif($_GET["Operation"] == "*"){
        $result = $numA * $numB;
        echo "<h3>$numA x $numB = $result";
    }
    elseif($_GET["Operation"] == "/"){
        $result = $numA / $numB;
        echo "<h3>$numA / $numB = $result";
    }
    else{
        echo "Nothing";
    }
    ?>
</body>
</html>