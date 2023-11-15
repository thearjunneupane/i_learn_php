<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include | File Inclusion</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Forms/get-form.php">
            <h2><i>&#8592; Post-Form</i></h2>
        </a>

        <a href="/i_learn_php/learn/File-Inclusion/require.php">
            <h2><i>Require &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "include() - File Inclusion";
    echo "<h2>$title</h2>";
    echo "=> The include() function takes all the text in a specified file and copies it into the file that uses the include function.";
    echo "<br>";
    echo "=> If there is any problem in loading a file then the include() function generates a warning but the script will continue execution.";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    include(\"<i>filename</i>\");
    OR
    include \"<i>filename</i>\";
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "<strong><i>example1.php</i></strong>";
    echo "

    &lt;?php
        echo \"This message is from example1.php&lt;br&gt;\";
        echo \"This message is from example1.php&lt;br&gt;\";
        echo \"This message is from example1.php&lt;br&gt;\";
    ?&gt;
    ";
    echo "</pre>";
    echo "<pre>";
    echo "<strong><i>include.php(This File)</i></strong>";
    echo "

    &lt;?php
        include(\"example1.php\");
    ?&gt;
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    echo "<br>";
    include("example1.php");
    echo "<br>";

    echo "*Note: You can also include .html files.";
    echo "<br>";

    ?>

</body>

</html>