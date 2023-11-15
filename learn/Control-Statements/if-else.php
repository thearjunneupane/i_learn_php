<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else | Control_Statements</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Basics/operators.php">
            <h2><i>&#8592; Operators</i></h2>
        </a>

        <a href="/i_learn_php/learn/Control-Statements/switch-case.php">
            <h2><i>Switch-Case &#8594;</i></h2>
        </a>

    </div>

    <?php


    $title = "Syntax";
    echo "<h3>$title</h3>";

    echo "<pre>";
    echo "  if(condition){  
        //code to be executed  
  }  ";
    echo "</pre>";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Exercises";
    echo "<h3>$title</h3>";

    echo "<stong><u>1. Create a PHP script that takes a user's age as input and prints a message indicating whether the user is eligible to vote or not. Use an if-else statement to check if the age is above a certain threshold (e.g., 18 years).</u></strong>";
    echo "<br>";
    echo "<pre>";
    echo "  &lt;?php

        \$age = readline(\"Enter Your Age:\");

        if (\$age >= 18) {
            echo \"You are Eligible to vote:\";
        } else {
            echo \"Sorry, Not eligible to vote:\";
    }

  ?&gt;";
    echo "</pre>";


    echo "<stong><u>2. Write a PHP program that prompts the user to enter three numbers. Compare the three numbers and use an if-else statement to print a message indicating which number is greatest, if any two are equal then print them and print the smallest.</u></strong>";
    echo "<br>";
    echo "<pre>";
    echo "  &lt;?php

    \$num_1 = readline(\"Enter First Number: \");
    \$num_2 = readline(\"Enter Second Number: \");
    \$num_3 = readline(\"Enter Third Number: \");

    if (\$num_1 == \$num_2 && \$num_2 == \$num_3) {
        echo \"All three numbers are equal\\n\";
    } else if (\$num_1 == \$num_2) {
        echo \"\$num_1 and \$num_2 are equal i.e. \$num_1\\n\";
    } else if (\$num_2 == \$num_3) {
        echo \"\$num_1 and \$num_3 are equal i.e. \$num_2\\n\";
    } else if (\$num_1 == \$num_3) {
        echo \"\$num_1 and \$num_3 are equal i.e. \$num_3\\n\";
    }

    \$maxNum = max(array(\$num_1, \$num_2, \$num_3));
    \$minNum = min(array(\$num_1, \$num_2, \$num_3));

    echo \"The greatest Number is: \$maxNum\\n\";
    echo \"The Smallest Number is: \$minNum\";
    
  ?&gt;";

    echo "</pre>";

    ?>



</body>

</html>