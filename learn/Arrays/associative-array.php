<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Array | Arrays</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Arrays/indexed-array.php">
            <h2><i>&#8592; Indexed-Array</i></h2>
        </a>

        <a href="/i_learn_php/learn/Arrays/multidimensional-array.php">
            <h2><i>Multidimensional-Array &#8594;</i></h2>
        </a>

    </div>
    <?php

    $title = "Associative Array";
    echo "<h2>$title</h2>";

    echo "=> PHP allows you to associate name/label (\$key => \$value) with each array elements in PHP using => symbol.";
    echo "<br>";
    echo "=> In order to Define an associative array, there are two ways";
    echo "<br>";
    echo "<strong>Way 1:</strong>";
    echo "<pre>";
    echo "
    \$salary=array(\"Bishnu Bhai\"=>\"550000\",\"Shiva Jigri\"=>\"250000\",\"Krishna Bro\"=>\"200000\");  
    ";
    echo "</pre>";
    echo "<strong>Way 2:</strong>";
    echo "<pre>";
    echo "
    \$salary[\"Bishnu Bhai\"]=\"550000\";  
    \$salary[\"Shiva Jigri\"]=\"250000\";  
    \$salary[\"Krishna Bro\"]=\"200000\";  
    ";
    echo "</pre>";

    $title2 = "SYNTAX";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    \$arrayName = [
        'key1' => 'value1',
        'key2' => 'value2',
    ];
    ";
    echo "</pre>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$salary=array(\"Bishnu Bhai\"=>\"550000\",\"Shiva Jigri\"=>\"250000\",\"Krishna Bro\"=>\"200000\");  
    echo \"Bishnu Bhai salary: \".\$salary[\"Bishnu Bhai\"].\"&lt;br&gt;\";  
    echo \"Shiva Jigri salary: \".\$salary[\"Shiva Jigri\"].\"&lt;br&gt;\";  
    echo \"Krishna Bro salary: \".\$salary[\"Krishna Bro\"].\"&lt;br&gt;\";  
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $salary = array("Bishnu Bhai" => "550000", "Shiva Jigri" => "250000", "Krishna Bro" => "200000");
    echo "Bishnu Bhai salary: " . $salary["Bishnu Bhai"] . "<br/>";
    echo "Shiva Jigri salary: " . $salary["Shiva Jigri"] . "<br/>";
    echo "Krishna Bro salary: " . $salary["Krishna Bro"] . "<br/>";

    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Looping Associative Array";
    echo "<h2>$title</h2>";

    echo "=> By the help of PHP for each loop, we can easily loop the elements of PHP associative array..";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "  
    \$salary=array(\"Bishnu Bhai\"=>\"550000\",\"Shiva Jigri\"=>\"250000\",\"Krishma Bro\"=>\"200000\");  
    foreach(\$salary as \$k => \$v) {  
    echo \"Key: \".\$k.\" Value: \".\$v.\"&lt;br&gt;\";  
    }     
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $salary = array("Bishnu Bhai" => "550000", "Shiva Jigri" => "250000", "Krishna Bro" => "200000");
    foreach ($salary as $k => $v) {
        echo "Key: " . $k . " Value: " . $v . "<br/>";
    }

    echo "<br>";

    ?>



</body>

</html>