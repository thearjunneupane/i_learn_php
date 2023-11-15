<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Require | File Inclusion</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <p><i>&#8592; BACK TO CONTENTS</i></p>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/File-Inclusion/include.php">
            <h2><i>&#8592; Include</i></h2>
        </a>

        <a href="/i_learn_php/learn/File-Inclusion/include-vs-require.php">
            <h2><i>Include vs Require &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "require() - File Inclusion";
    echo "<h2>$title</h2>";
    echo "=> The require() function takes all the text in a specified file and copies it into the file that uses the include function.";
    echo "<br>";
    echo "=> If there is any problem in loading a file then the require() function generates a fatal error and halt the execution of the script.";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    require(\"<i>filename</i>\");
    OR
    require \"<i>filename</i>\";
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "<strong><i>example2.html</i></strong>";
    echo "
    &lt;html&gt;
        &lt;body&gt;
            &lt;p&gt;This is a message from example2.html&lt;/p&gt;
            &lt;p&gt;This is a message from example2.html&lt;/p&gt;
            &lt;p&gt;This is a message from example2.html&lt;/p&gt;
            &lt;p&gt;This is a message from example2.html&lt;/p&gt;
        &lt;/body&gt;
    &lt;/html&gt;
    ";
    echo "</pre>";
    echo "<pre>";
    echo "<strong><i>require.php(This File)</i></strong>";
    echo "

    &lt;?php
        require(\"example2.html\");
    ?&gt;
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    echo "<br>";
    require("example2.html");
    echo "<br>";

    echo "<b>Shit! Both the function works as same. Then what's the difference? LOOK The 'vs' in next page.</b>";
    echo "<br>";

    ?>

</body>

</html>