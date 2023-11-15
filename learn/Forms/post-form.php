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

        <a href="/i_learn_php/learn/Forms/get-form.php">
            <h2><i>&#8592; Get-Form</i></h2>
        </a>

    </div>

    <?php

    $title = "POST - Form Handling";
    echo "<h2>$title</h2>";
    echo "=> The data passed through post request is not visible on the URL browser so it is secured.";
    echo "<br>";
    echo "=> The amount of data that can be transfered through one GET request is an average of 512-1024 Kb or a maximum of 5 parameters. However, The POST method does not have any restriction on data size to be sent.";
    echo "<br>";
    echo "=> The PHP provides \$_POST associative array to access all the sent information using POST method.";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    // Check if the form is submitted using the POST method
    if (\$_SERVER[\"REQUEST_METHOD\"] == \"POST\") {
    
        // Retrieve data from the form using the \"name\" attribute
        \$variable_name = isset(\$_POST[\"input_name\"]) ? \$_POST[\"input_name\"] : null;
    
        // Perform further actions based on the data received
    
    }
    
    ";
    echo "</pre>";
    echo "<br>";

    echo "=> In the above syntax We have used new superGlobalVariables (\$_POST) and (\$_SERVER).";
    echo "<br>";
    echo "\$_POST => is used to collect form data after submitting an HTML form with method=\"post\". ";
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

    if (\$_SERVER[\"REQUEST_METHOD\"] == \"POST\") {
        \$book = isset(\$_POST[\"book\"]) ? \$_POST[\"book\"] : NULL;
        \$author = isset(\$_POST[\"author\"]) ? \$_POST[\"author\"] : NULL;

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
    echo "Just Submit some value and see the URL of your browser. What you will see is what the POST request method do.";
    echo "<br>";
    ?>

    <div style="max-width: 20vw; border: 2px solid black; margin: 20px 0; padding: 10px;">
        <form id="form" action="/i_learn_php/learn/Forms/post-form.php#form" method="POST">
            <label for="book">Book:</label><br>
            <input type="text" name="book" id="book" placeholder="Enter Book Name..."><br>
            <label for="author">Author:</label><br>
            <input type="text" name="author" id="author" placeholder="Enter Author Name..."><br>
            <button type="submit">Submit</button>
            <br>
            <br>
        </form>

        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $book = isset($_POST["book"]) ? $_POST["book"] : NULL;
            $author = isset($_POST["author"]) ? $_POST["author"] : NULL;

            if ($book == NULL && $author == NULL) {
                echo "Ugh! Your input is Empty";
            } else {
                echo "The Data You Entered: <br>";
                echo "Book: " . $book;
                echo "<br>";
                echo "Author: " . $author;
                echo "<br>";
                echo "<br>";
                echo "See!! You saw nothing in the URL. That is why POST method is secure.";
            }
            echo "<br>";
            echo "<br>";
        }


        ?>
    </div>


</body>

</html>