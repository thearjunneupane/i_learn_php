<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contents</title>
</head>

<body>
    <?php

    $title = "Contents";
    echo "<h1><strong><u>$title</u></strong></h1>";

    $contents = array(
        "Basics" => array(
            "Variables in PHP" => "variables.php",
            "Operators in PHP" => "operators.php",
        ),
        "Control-Statements" => array(
            "If Else in PHP" => "if-else.php",
            "Switch Case in PHP" => "switch-case.php",
            "Loops in PHP" => "loop.php"
        ),
        "Functions" => array(
            "Function in PHP" => "function.php",
            "Inner Function And Closures in PHP" => "inner-function-and-closures.php",
        ),        
        "Arrays" => array(
            "Indexed Array in PHP" => "indexed-array.php",
            "Associative Array in PHP" => "associative-array.php",
            "Multidimensional Array in PHP" => "multidimensional-array.php",
        ),
        "Forms" => array(
            "GET Method in PHP" => "get-form.php",
            "POST Method in PHP" => "post-form.php"
        ),
    );
     $i = 0;
    foreach ($contents as $subtopic => $topics) {
        $i++;
        echo "<h2><strong>$i. $subtopic</strong></h2>";
        echo "<ul type='disc'>";
        foreach ($topics as $topic => $url) {
            echo "<li><h3><a href='$subtopic/$url'>$topic</a></h3></li>";
        }
        echo "</ul>";
        echo "</ol>";
    }

    ?>
</body>

</html>