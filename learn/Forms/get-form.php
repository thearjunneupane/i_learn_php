<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Form | Forms</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Arrays/multidimensional-array.php">
            <h2><i>&#8592; Multidimensional-Array</i></h2>
        </a>

        <a href="/i_learn_php/learn/Forms/post-form.php">
            <h2><i>Post-Form &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "GET - Form Handling";
    echo "<h2>$title</h2>";
    echo "=> Get request is the default form request.";
    echo "=> The data passed through get request is visible on the URL browser so it is not secured.";
    echo "<br>";
    echo "=> The page and the encoded information are separated by the ? character.";
    echo "<br>";
    echo "=> The PHP provides \$_GET associative array to access all the sent information using GET method.";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    // Check if the form is submitted using the GET method
    if (\$_SERVER[\"REQUEST_METHOD\"] == \"GET\") {

        // Retrieve data from the form using the \"name\" attribute
        \$variable_name = \isset(\$_GET[\"input_name\"]) ? \$_GET[\"input_name\"] : null;

       // Perform further actions based on the data received

    }
    ";
    echo "</pre>";
    echo "<br>";

    echo "=> In the above syntax We have used superGlobalVariables (\$_GET) and (\$_SERVER).";
    echo "<br>";
    echo "\$_GET => Is used to collect form data after submitting an HTML form with method=\"get\" and also collect data sent in the URL.";
    echo "<br>";
    echo "\$_SERVER => Holds information about methods, headers, paths, and script locations.";
    echo "<br>";
    echo "=> Similarly, We have used an isset() function. The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. ";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    &lt;form action=\"/i_learn_php/learn/Forms/get-form.php\" method=\"GET\"&gt;
    &lt;label for=\"book\">Book:&lt;/label&gt;&lt;br&gt;
    &lt;input type=\"text\" name=\"book\" id=\"book\" placeholder=\"Enter Book Name...\"&gt;&lt;br&gt;
    &lt;label for=\"author\"&gt;Author:&lt;/label&gt;&lt;br&gt;
    &lt;input type=\"text\" name=\"author\" id=\"author\" placeholder=\"Enter Author Name...\"&gt;&lt;br&gt;
    &lt;button type=\"submit\"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;

    &lt;?php

    if (\$_SERVER[\"REQUEST_METHOD\"] == \"GET\") {
        \$book = isset(\$_GET[\"book\"]) ? \$_GET[\"book\"] : NULL;
        \$author = isset(\$_GET[\"author\"]) ? \$_GET[\"author\"] : NULL;

        if (\$book == NULL && \$author == NULL) {
            echo \"Ugh! Your input is Empty\";
        } else {
            echo \"The Data You Entered:\";
            echo \"Book: \" . \$book;
            echo \"Author: \" . \$author;
        }

    }
    ?&gt;

    A Ternary Operator is use in the above example;
    SYNTAX OF TERNARY OPERATOR: <i>\$variable = (condition) ? value_if_true : value_if_false;</i>
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    echo "Just Submit some value and see the URL of your browser. What you will see is what the GET request method do.";
    echo "<br>";
    ?>

    <div style="max-width: 20vw; border: 2px solid black; margin: 20px 0; padding: 10px;">
        <form id="form" action="/i_learn_php/learn/Forms/get-form.php#form" method="GET">
            <label for="book">Book:</label><br>
            <input type="text" name="book" id="book" placeholder="Enter Book Name..."><br>
            <label for="author">Author:</label><br>
            <input type="text" name="author" id="author" placeholder="Enter Author Name..."><br>
            <button type="submit">Submit</button>
            <br>
            <br>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $book = isset($_GET["book"]) ? $_GET["book"] : NULL;
            $author = isset($_GET["author"]) ? $_GET["author"] : NULL;

            if ($book == NULL && $author == NULL) {
                echo "Ugh! Your input is Empty";
            } else {
                echo "The Data You Entered: <br>";
                echo "Book: " . $book;
                echo "<br>";
                echo "Author: " . $author;
            }
            echo "<br>";
            echo "<br>";
            echo "<a href=\"/i_learn_php/learn/Forms/get-form.php#form\"><button>Reset URL</button></a>";
        }


        ?>
    </div>

</body>

</html>