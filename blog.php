<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
</head>
<body>
    <?php
    ini_set('display_errors', FALSE);
    $title = "A Blog on PHP";
    $author = "Person";
    $article = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique eum, quasi ullam minima suscipit laborum illum quis delectus. Quidem iste quo architecto eius rerum fugit doloribus ratione quasi exercitationem est.";
        include "blog-header.php"
    ?>
    <?php
    ini_set('display_errors', FALSE);
    $title = "A Blog on C++";
    $author = "Human";
    $article = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique eum, quasi ullam minima suscipit laborum illum quis delectus. Quidem iste quo architecto eius rerum fugit doloribus ratione quasi exercitationem est.";
        include "blog-header.php"
    ?>
</body>
</html>