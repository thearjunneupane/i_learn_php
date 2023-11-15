<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Array | Arrays</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Functions/inner-function-and-closures.php">
            <h2><i>&#8592; Inner-Function</i></h2>
        </a>

        <a href="/i_learn_php/learn/Arrays/associative-array.php">
            <h2><i>Associative-Array &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "Indexed Array";
    echo "<h2>$title</h2>";

    echo "=> Index is represented by number which starts from 0.";
    echo "<br>";
    echo "=> In order to Define an array, there are two ways";
    echo "<br>";
    echo "<strong>Way 1:</strong>";
    echo "<pre>";
    echo "
    \$season=array(\"summer\",\"winter\",\"spring\",\"autumn\");  
    ";
    echo "</pre>";
    echo "<strong>Way 2:</strong>";
    echo "<pre>";
    echo "
    \$season[0]=\"summer\";  
    \$season[1]=\"winter\";  
    \$season[2]=\"spring\";  
    \$season[3]=\"autumn\";  
    ";
    echo "</pre>";
    echo "<br>";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    \$arrayName = array(element1, element2, ...);
    ";
    echo "</pre>";
    echo "Alternatively, you can use the short array syntax (available in PHP 5.4 and later):";
    echo "<pre>";
    echo "  
    \$arrayName = [element1, element2, ...];
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$season=array(\"summer\",\"winter\",\"spring\",\"autumn\");  
    echo \"In First Way: &lt;br&gt;Season are: \$season[0], \$season[1], \$season[2] and \$season[3]\";  
    
    \$month[0]=\"Jan\";  
    \$month[1]=\"Feb\";  
    \$month[2]=\"Mar\";  
    \$month[3]=\"Apr\";  
    
    echo \"In Second Way: &lt;br&gt;Months are: \$,month[0], \$month[1], \$month[2] and \$month[3]\";  
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $season = array("summer", "winter", "spring", "autumn");
    echo "In First Way: <br> Season are: $season[0], $season[1], $season[2] and $season[3]";

    $month[0] = "Jan";
    $month[1] = "Feb";
    $month[2] = "Mar";
    $month[3] = "Apr";

    echo "In Second Way: <br> Months are: $month[0], $month[1], $month[2] and $month[3]";

    echo "<br>";

    ?>

</body>

</html>