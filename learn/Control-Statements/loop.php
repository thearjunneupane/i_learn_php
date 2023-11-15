<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop | Control_Statements</title>
</head>

<body>

    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

    <a href="/i_learn_php/learn/Control-Statements/switch-case.php">
            <h2><i>&#8592; Switch-Case</i></h2>
        </a>

        <a href="/i_learn_php/learn/Functions/function.php">
            <h2><i>Function &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "While Loop";
    echo "<h2>$title</h2>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    while(condition){  
        //code to be executed  
    } 
    ";
    echo "</pre>";
    echo "<br>";
    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$init = \"A\";
    while (\$init <= 'H') {
        echo \$init;
        echo \"&lt;br&gt;\";
        \$init++;
    }
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $init = "A";
    while ($init <= 'H') {
        echo $init;
        echo "<br>";
        $init++;
    }
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Do While Loop";
    echo "<h2>$title</h2>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
do{  
    //code to be executed  
} while(condition);  
";
    echo "</pre>";
    echo "<br>";
    echo "<strong>EXAMPLE</strong>";
    echo "<br>";
    echo "The following example will increment the value of \$init at least once. Because the given condition is false.";
    echo "<br>";

    echo "<pre>";
    echo "
    \$init = 1;  
    do {  
        echo \"1 is not greater than 10.\";  
        echo \"&lt;/br&gt;\";  
        \$init++;  
    } while (\$init > 10);  
    echo \$init;  
";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $init = 1;
    do {
        echo "1 is not greater than 10.";
        echo "</br>";
        $init++;
    } while ($init > 10);
    echo $init;
    echo "<br>";
    echo "<br>";

    echo "<strong>Difference Between While Loop And Do While Loop</strong>";
    echo "<br>";
    echo "  <table>
                <tbody>
                    <tr>
                        <th style='border: 1px solid black; background-color: #888888;'>while Loop</th>
                        <th style='border: 1px solid black; background-color: #888888;'>do-while loop</th>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black;'>The while loop is also named as <strong>entry control loop</strong>.</td>
                        <td style='border: 1px solid black;'>The do-while loop is also named as <strong>exit control loop</strong>.</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black;'>The body of the loop does not execute if the condition is false.</td>
                        <td style='border: 1px solid black;'>The body of the loop executes at least once, even if the condition is false.</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black;'>Condition checks first, and then block of statements executes.</td>
                        <td style='border: 1px solid black;'>Block of statements executes first and then condition checks.</td>
                    </tr>
                    <tr>
                        <td style='border: 1px solid black;'>This loop does not use a semicolon to terminate the loop.</td>
                        <td style='border: 1px solid black;'>Do-while loop use semicolon to terminate the loop.</td>
                    </tr>
                </tbody>
            </table>
        ";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "For Loop";
    echo "<h2>$title</h2>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
for(initialization; condition; increment/decrement){  
    //code to be executed  
}  
";
    echo "</pre>";
    echo "<br>";
    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$i = 0;  
    //infinite loop with a breaker
    for (;;) {  
        echo \$i++;  
        echo \"&lt;/br&gt;\";  
        if (\$i == 10) {
            break;
        }
    }   
";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";
    $i = 0;
    //infinite loop with a breaker.
    for (; ; ) {
        echo $i++;
        echo "</br>";
        if ($i == 10) {
            break;
        }
    }

    ?>

    <hr>

    <?php

    $title = "ForEach Loop";
    echo "<h2>$title</h2>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    foreach (\$array as \$value) {  
        //code to be executed  
    }  
";
    echo "<br>";
    echo "Also";
    echo "<br>";
    echo "  
    foreach (\$array as \$key => \$element) {  
        //code to be executed  
    }  
";
    echo "</pre>";
    echo "<br>";
    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
\$employee_1 = array(
    \"Name\" => \"Arjun\",
    \"Email\" => \"hawa@gmail.com\",
    \"Age\" => 17,
    \"Profession\" => \"Unemployed\"
);

foreach (\$employee_1 as \$key => \$element) {
    echo \$key . \": \" . \$element;
    echo \"&lt;br&gt;\";
}
";
    echo "</pre>";
    echo "<br>";
    echo "*Note: If the array contains only element, not a key value pair then the stement would be like";
    echo "<br>";
    echo "<pre>foreach (\$employee_1 as \$element)</pre>";
    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $employee_1 = array(
        "Name" => "Arjun",
        "Email" => "hawa@gmail.com",
        "Age" => 17,
        "Profession" => "Unemployed"
    );

    foreach ($employee_1 as $key => $element) {
        echo $key . ": " . $element;
        echo "<br>";
    }

    ?>

    <hr>

    <?php

    $title = "Misc.";
    echo "<h2>$title</h2>";

    $title2 = "Break Statement";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    break;
    ";
    echo "</pre>";
    echo "<strong>Uses: </strong>";
    echo "<br>";
    echo "1. The break keyword immediately ends the execution of the loop or switch structure.<br>";
    echo "2. It breaks the current flow of the program at the specified condition and program control resumes at the next statements outside the loop.<br>";
    echo "3. The break statement can be used in all types of loops such as while, do-while, for, foreach loop, and also with switch case.<br>";
    echo "<br>";
    echo "<strong>*Note: PHP Break: using optional argument</strong><br>";
    echo "-> The break accepts an optional numeric argument, which describes how many nested structures it will exit. The default value is 1, which immediately exits from the enclosing structure.<br>";
    echo "-> In a nested flow with a switch case inside while loop, if i write break 1 (default is 1) in a switch case, then it will break the whole statement only <br>";
    echo "-> But If i write break 2; Then the outer while loop will also be breaked.<br>";
    echo "-> So, The number after break denotes the out-depth to be breaked from.<br>";
    echo "<br>";

    $title2 = "Continue Statement";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    continue;
    ";
    echo "</pre>";
    echo "<strong>Uses: </strong>";
    echo "<br>";
    echo "1. It continues the current flow of the program and skips the remaining code at the specified condition.<br>";
    echo "2. The continue statement is used within looping and switch control structure when you immediately jump to the next iteration.<br>";
    echo "3. The continue statement can be used in all types of loops such as while, do-while, for, foreach loop, and also with switch case.<br>";
    echo "<br>";
    echo "<strong>*Note: PHP Continue: using optional argument</strong><br>";
    echo "-> The continue accepts an optional numeric argument, which describes how many nested structures it will reiterate. The default value is 1, which immediately exits from the enclosing structure.<br>";
    echo "-> In a nested flow with a switch case inside while loop, if i write continue 1 (default is 1) in a switch case, then it will reiterate the whole statement only <br>";
    echo "-> But If i write continue 2; Then the outer while loop will be reiterated.<br>";
    echo "-> So, The number after continue denotes the out-depth to be reiterated from.<br>";
    echo "<br>";

    ?>

</body>

</html>