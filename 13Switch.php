<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <form action="13Switch.php" method="post">
        <input type="text" name="grade" id="">
        <input type="submit" value="Submit">
    </form>
    <?php
        $grade = $_POST["grade"];
        switch($grade){
            case "A":
                echo "<h1>You have done great!</h1>";
                break;

            case "B":
                echo "<h1>Good job! Try to do better.</h1>";
                break;
            
            case "C":
                echo "<h1>Not Bad. Try a little harder.</h1>";
                break;
            case "D":
                echo "<h1>Better than nothing.</h1>";
                break;
            case "F":
                echo "<h1>Guess you have to do some extra work to pass.</h1>";
                break;
            default:
                echo "<h1>Invalid Gread</h1>";
        }
    ?>
</body>
</html>