<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables | Basics</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Basics/operators.php">
            <h2><i>Operators &#8594;</i></h2>
        </a>

    </div>

    <?php
    $title = "Getting Variables";
    echo "<h3>$title</h3>";

    echo "<u>Declarations:</u><br>";
    echo "\$string = \"Arjun\"<br>";
    echo "\$number = 10<br>";
    echo "\$concatenated = \$string . \$number<br>";
    echo "<br>";

    $string = "Arjun";
    $number = 10;
    $concatenated = $string . $number;

    echo "The \$string is $string";
    echo "<br>";
    echo "The \$number is $number";
    echo "<br>";
    echo "The \$concatenated is $concatenated";
    echo "<br>";
    echo "The type of \$string is: ";
    var_dump($string);
    echo "<br>";
    echo "The type of \$number is: ";
    var_dump($number);
    echo "<br>";
    echo "The type of \$concatenated is: ";
    var_dump($concatenated);
    echo ". Since int is concatenated with string the result will be also a string";
    echo "<br>";
    ?>

    <hr>

    <?php
    $title = "Changing variables";
    echo "<h3>$title</h3>";

    echo "<u>Declarations:</u><br>";
    echo "\$original = \"Patrick Bateman\"<br>";
    echo "<br>";

    $original = "Patrick Bateman";

    echo "The \$original before changing is: " . $original;
    echo "<br>";
    echo "<br>";

    echo "<u>Redeclaration:</u><br>";
    echo "\$original = \"Cristian Bale\"<br>";
    echo "<br>";

    $original = "Christian Bale";

    echo "The \$original after changing is: " . $original . " and type of \$original: ";
    var_dump($original);
    echo "<br>";
    echo "<br>";

    echo "<u>Again Redeclaration:</u><br>";
    echo "\$original = 9990<br>";
    echo "<br>";

    $original = 9990;

    echo "The \$original after changing into integer is : " . $original . " and type of \$original: ";
    var_dump($original);

    ?>

    <hr>

    <?php
    $title = "Learning Array";
    echo "<h3>$title</h3>";

    echo "<u>Declarations:</u><br>";
    echo "\$arr = array(\"Neitzsche\", 999, false, null, 999.999)<br>";
    echo "<br>";

    $arr = array("Neitzsche", 999, true, null, 999.999);
    echo "The Dumped array is: ";
    var_dump($arr);

    echo "<br>";

    echo "Serially: <br>\$arr[0] = $arr[0] <br> \$arr[1] = $arr[1] <br> \$arr[2] = $arr[2] (If false, it will be empty not 0.) <br> \$arr[3] = $arr[3] (It is empty because it is null.) <br> \$arr[4] = $arr[4]";


    ?>

    <hr>

    <?php
    $title = "Remaining data types";
    echo "<h3>$title</h3>";

    $Nullify = NULL;
    echo "The \$Nullify is: ";
    var_dump($Nullify);

    echo "<br>";

    $Boolify = true;
    echo "The \$Boolify is: ";
    var_dump($Boolify);

    echo "<br>";

    echo "Objects and Resources are also there in data types but will be discused as an individual topic."

        ?>

    <hr>

    <?php

    $title = "The $ and $$ Variables";
    echo "<h3>$title</h3>";

    echo "<u>Declarations:</u><br>";
    echo "\$var_1 = \"Car\"<br>";
    echo "\$\$var_1 = \"Engine\"<br>";
    echo "<br>";

    $var_1 = "Car";
    $$var_1 = "Engine";

    echo "The \$var_1 is the: ";
    var_dump($var_1);
    echo "<br>";

    echo "\$var_1 have single '$' so it contains the value \$var_1 = $var_1";

    echo "<br>";

    echo "The \$\$var_1 is the: ";
    var_dump($$var_1);
    echo "<br>";


    echo "\$\$var_1 have double '$$' so it contains the value \$\$var_1 = $$var_1 (Since As declared it should have be Engine Why not? See below)";

    echo "<br>";

    echo "The '\$\$var_1' means \$(\$var_1) so \$\$var_1 = $$var_1. Again the \$Car = $Car";
    echo "<br>";
    echo "This means the value of \$\$var_1, is now a new variable which's name is the value of \$var_1.";
    echo "<br>";
    echo "So The \$\$var_1 value is the: ";
    var_dump($$var_1);
    echo "<br>";
    echo "So Also The \$Car value is the: ";
    var_dump($Car);

    echo "<br><br>";
    echo "<strong><i>What happend if it's a number? => Let's test it !!</i></strong>";
    echo "<br>";

    echo "<u>Declarations:</u><br>";
    echo "\$var_as_num = 100<br>";
    echo "\$\$var_as_num = 10<br>";
    echo "<br>";

    $var_as_num = 100;
    $$var_as_num = 10;

    echo "The \$var_as_num is the: ";
    var_dump($var_as_num);
    echo "<br>";

    echo "\$var_as_num have single '$' so it contains the value \$var_as_num = $var_as_num";

    echo "<br>";

    echo "The \$\$var_as_num is the: ";
    var_dump($$var_as_num);
    echo "<br>";


    echo "\$\$var_as_num have double '$$' so it contains the value \$\$var_as_num = $$var_as_num";
    echo "<br>";
    echo "Then, The value of \$100 should be 10.";
    echo "<br>";

    echo "Test: ";
    echo "The value of \$\$var_as_num = $$var_as_num AND The value of \$100 = $100";
    echo "<br>";

    echo "WTF! It is showing $100 its not as expected. So now how to get the value 10 without from var_dump()?";
    echo "<br>";
    echo "Here's how?";
    echo "<br>";

    echo "We can get '10' by putting the \$\$var_as_num in curly braces.";
    echo "<br>";
    echo "So Without Curly braces: \$\$var_as_num = $$var_as_num";
    echo "<br>";
    echo "So With Curly braces : {\$\$var_as_num} = {$$var_as_num}";

    echo "<br>";

    echo "This method can also be used in the first case."

        ?>

    <hr>

    <?php
    $title = "Global Keyword";
    echo "<h3>$title</h3>";

    echo "The 'global' keyword in PHP is used to get the global variables.";
    echo "<br>";
    echo "For example: If you want to get a global variable inside a function than you can use 'global' keyword.";
    echo "<br>";


    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$globalVar = \"You is I\";
    function Globalify(\$info) {
        global \$globalVar;
        echo \"The \$globalVar is: You is I\";
    }
    Globalify(\$globalVar);

    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $globalVar = "You is I";
    function Globalify($info)
    {
        global $globalVar;
        echo "The \$globalVar is: You is I";
    }
    Globalify($globalVar);

    echo "<br>";
    echo "<br>";

    echo "=> In the above example, We get the \$globalVar inside Globalify() function using 'global' keyword.";
    echo "<br>";
    echo "*Note: If you alter the value of the global variable like 'global \$globalVar = \"I am You\"' then it will change the value. So the output will be 'The \$globalVar is: I am You'."


        ?>


</body>

</html>