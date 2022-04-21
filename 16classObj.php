<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class & Object</title>
</head>
<body>
    <?php
        class Book{
            var $title;
            var $author;
            var $index;
            var $pages;
        }

        $bookA = new Book;
        $bookA->title = "New things";
        $bookA->author = "A Person";
        $bookA->index = array("index1", "index2", "index3", "index4");
        $bookA->pages = 300;

        echo "<h2>$bookA->title</h2>";
        echo "<h5>$bookA->author</h5>";
        $aIndex = $bookA->index;
        for($i=0; $i < count($aIndex); $i++){
            echo "<a href='#'>$aIndex[$i]</a><br>";
        }
        echo "<pre>Pages: $bookA->pages</pre>";
    ?>
</body>
</html>