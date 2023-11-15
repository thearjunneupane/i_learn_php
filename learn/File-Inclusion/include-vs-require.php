<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include Vs Require | File Inclusion</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <p><i>&#8592; BACK TO CONTENTS</i></p>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/File-Inclusion/require.php">
            <h2><i>&#8592; Require</i></h2>
        </a>

    </div>

    <?php

    $title = "include() vs require() - File Inclusion";
    echo "<h2>$title</h2>";
    echo "<div style='border: 2px solid black; padding: 10px; margin: 20px 0;'>";
    echo "<span><b>*Note:</b></span>";
    echo "<br>";
    echo ">> Use require when the file is required by the application.";
    echo "<br>";
    echo ">> Use include when the file is not required and application should continue when file is not found.";
    echo "</div>";
    echo "=> In short, there is no difference in require() and include() except they handle error conditions.";
    echo "<br>";
    echo "=> <b>include()</b> only generates a warning, i.e., E_WARNING, and continue the execution of the script.";
    echo "<br>";
    echo "=> <b>require()</b> generates a fatal error, i.e., E_COMPILE_ERROR, and stop the execution of the script.";
    echo "<br>";
    echo "<br>";

    echo "<b>Let's understand the difference with the help of example:</b>";
    echo "<br>";
    echo "<br>";
    ?>

    <?php


    echo "<strong>EXAMPLE by using include()</strong>";
    echo "<br>";

    echo "<pre>";
    echo "<strong><i>include-vs-require.php(This File)</i></strong>";
    echo "

    &lt;?php
        //include unknownfile.php file   
        include(\"unknownfile.php\");  
        echo \"The unknownile is included.\";  
    ?&gt;
    ";
    echo "</pre>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    ?>

    <div style="border: 2px solid black; padding: 10px; margin: 20px 0;">
        <span><b><u>Error Message:</u></b></span><br>
        <?php
        include("unknownfile.php");
        echo "The unknownfile is included.";
        ?>
    </div>

    <?php
    echo "<br>";

    echo "<b>See! In the above, the error message we got is WARNING and the next echo line after the error is also executing while using include.</b>";
    echo "<br>";
    echo "<br>";

    ?>

    <hr>

    <?php

    echo "<br>";
    echo "<strong>EXAMPLE by using require()</strong>";
    echo "<br>";

    echo "<pre>";
    echo "<strong><i>include-vs-require.php(This File)</i></strong>";
    echo "

    &lt;?php
        //require unknown.php file   
        require(\"unknownfile.php\");  
        echo \"The unknownile is required.\";  
    ?&gt;
    ";
    echo "</pre>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    echo "<br>";

    echo "<b>See! In the below, the error message we got is a FATAL_ERROR and the next echo line after the error is not executing while using require. And so i have written this befor it. No code is executed after it.</b>";
    echo "<br>";
    echo "<br>";
    ?>

    <div style="border: 2px solid black; padding: 10px; margin: 20px, 0;">
        <span><b><u>Error Message:</u></b></span><br>
        <?php
        require("unknownfile.php");
        echo "The unknownfile is required.";
        ?>
    </div>

    <?php

    ?>

</body>

</html>