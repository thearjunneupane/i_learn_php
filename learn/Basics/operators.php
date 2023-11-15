<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators | Basics</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Basics/variables.php">
            <h2><i>&#8592; Variables</i></h2>
        </a>

        <a href="/i_learn_php/learn/Control-Statements/if-else.php">
            <h2><i>If-Else &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "Arithmetic Operators";
    echo "<h3>$title</h3>";

    echo "There are 6 arithmetic operators in PHP. They are: <br>";
    echo "<strong>=> '+', '-', '*', '/', '%', '**'</strong>";
    echo "<br>";
    echo "<br>";

    echo "<u>Declarations:</u><br>";
    echo "\$num_1 = 100<br>";
    echo "\$num_2 = 200<br>";
    echo "<br>";

    $num_1 = 4;
    $num_2 = 2;

    echo "(Addition) The result of \$num_1 + \$num_2 is: ";
    echo $num_1 + $num_2;
    echo "<br>";
    echo "(Substraction) The result of \$num_1 - \$num_2 is: ";
    echo $num_1 - $num_2;
    echo "<br>";
    echo "(Multiplication) The result of \$num_1 * \$num_2 is: ";
    echo $num_1 * $num_2;
    echo "<br>";
    echo "(Division) The result of \$num_1 / \$num_2 is: ";
    echo $num_1 / $num_2;
    echo "<br>";
    echo "(Remainder) The result of \$num_1 % \$num_2 is: ";
    echo $num_1 % $num_2;
    echo "<br>";
    echo "(Exponential) The result of \$num_1 ** \$num_2 is: ";
    echo $num_1 ** $num_2;
    echo "<br>"

        ?>

    <hr>

    <?php

    $title = "Assignment Operators";
    echo "<h3>$title</h3>";

    echo "There are 6 arithmetic operators in PHP. They are: <br>";
    echo "<strong>=> '=', '+=', '-=', '*=', '/=', '%='</strong>";
    echo "<br>";
    echo "<br>";

    echo "For example \$a += \$b is same as \$a = \$a + \$b";
    echo "<br>"

        ?>

    <hr>

    <?php

    $title = "Bitwise Operators";
    echo "<h3>$title</h3>";

    echo "There are 6 bitwise operators in PHP. They are: <br>";
    echo "<strong>=> '&', '|', '^', '~', '<<', '>>'</strong>";
    echo "<br>";
    echo "<br>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Operator</th>";
    echo "<th>Name</th>";
    echo "<th>Example</th>";
    echo "<th>What?</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>&</td>";
    echo "<td>AND</td>";
    echo "<td>\$a & \$b</td>";
    echo "<td>Bits that are 1 in both \$a and \$b are set to 1, otherwise 0.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>|</td>";
    echo "<td>OR</td>";
    echo "<td>\$a | \$b</td>";
    echo "<td> Bits that are 1 in either \$a or \$b are set to 1.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>^</td>";
    echo "<td>XOR</td>";
    echo "<td>\$a ^ \$b</td>";
    echo "<td>Bits that are 1 in either \$a or \$b are set to 0.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>~</td>";
    echo "<td>NOT</td>";
    echo "<td>\$a ~ \$b</td>";
    echo "<td>Bits that are 1 set to 0 and bits that are 0 are set to 1.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><<</td>";
    echo "<td>Shift Left</td>";
    echo "<td>\$a << \$b</td>";
    echo "<td>Left shift the bits of operand \$a \$b steps.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>>></td>";
    echo "<td>Shift Right</td>";
    echo "<td>\$a >> \$b</td>";
    echo "<td>Right shift the bits of \$a operand by \$b number of places.</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>";
    echo "<br>";
    echo "*Note: This operators are not that much necessary for beginners";
    echo "<br>";
    ?>

    <hr>

    <?php

    $title = "Comparison Operators";
    echo "<h3>$title</h3>";

    echo "There are 10 Comparison operators in PHP. They are: <br>";
    echo "<strong>=> '==', '===', '!==', '!=', '<>', '<', '>', '<=', '>=', '<=>'</strong>";
    echo "<br>";
    echo "<br>";

    echo "<table>";
    echo "<tr>";
    echo "<th>Operator</th>";
    echo "<th>Name</th>";
    echo "<th>Example</th>";
    echo "<th>What?</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>==</td>";
    echo "<td>Equal</td>";
    echo "<td>\$a == \$b</td>";
    echo "<td>Return TRUE if \$a is equal to \$b.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>===</td>";
    echo "<td>Identical</td>";
    echo "<td>\$a === \$b</td>";
    echo "<td>Return TRUE if \$a is equal to \$b, and they are of same data type.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>!==</td>";
    echo "<td>Not identical</td>";
    echo "<td>\$a !== \$b</td>";
    echo "<td>Return TRUE if \$a is not equal to \$b, and they are not of same data type.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>!=</td>";
    echo "<td>Not equal</td>";
    echo "<td>\$a != \$b</td>";
    echo "<td>Return TRUE if \$a is not equal to \$b.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><></td>";
    echo "<td>Not equal</td>";
    echo "<td>\$a <> \$b</td>";
    echo "<td>Return TRUE if \$a is not equal to \$b.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><</td>";
    echo "<td>Less than</td>";
    echo "<td>\$a < \$b</td>";
    echo "<td>Return TRUE if \$a is less than \$b.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>></td>";
    echo "<td>Greater than</td>";
    echo "<td>\$a > \$b</td>";
    echo "<td>Return TRUE if \$a is greater than \$b.</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><=</td>";
    echo "<td>Less than or equal to</td>";
    echo "<td>\$a <= \$b</td>";
    echo "<td>Return TRUE if \$a is less than or equal \$b</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>>=</td>";
    echo "<td>Greater than or equal to</td>";
    echo "<td>\$a >= \$b</td>";
    echo "<td>Return TRUE if \$a is greater than or equal \$b</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td><=></td>";
    echo "<td>Spaceship</td>";
    echo "<td>\$a <=> \$b</td>";
    echo "<td>Return -1 if \$a is less than \$b <br> Return 0 if \$a is equal \$b <br> Return 1 if \$a is greater than \$b</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br>"
        ?>

    <hr>

    <?php

    $title = "Incre/Decre-menting Operators";
    echo "<h3>$title</h3>";

    echo "There are 2 that operators in PHP. They are: <br>";
    echo "<strong>=> '++', '--'</strong>";
    echo "<br>";
    echo "<br>";

    echo "For example \$a ++ \$b is same as \$a = \$a + 1";
    echo "*Note: ++\$a will be pre increment means the value of \$a first incrases by 1 and operation in done.";
    echo "*Note: \$a++ will be post increment means the operation is first done with initial \$a value and after is incresed by 1.";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Comparison Operators";
    echo "<h3>$title</h3>";

    echo "There are 4 Comparison operators in PHP. They are: <br>";
    echo "<strong>=>'Xor', '!', '&&', '||'</strong>";
    echo "<br>";
    echo "<br>";
    echo "The new is Xor which return TRUE if either \$a or \$b is true but not both.";
    echo "<br>";
    echo "Also The && and || operators can be used just by writting 'and' and 'or' respectively.";

    ?>

    <hr>

    <?php

    $title = "String Operators";
    echo "<h3>$title</h3>";

    echo "There are 2 string operators in PHP. They are: <br>";
    echo "<strong>=> '.(Dot)', '.='</strong>";
    echo "<br>";
    echo "<br>";

    echo "<u>Declarations:</u><br>";
    echo "\$str_1 = \"Arjun\"<br>";
    echo "\$str_2 = \"Neupane\"<br>";
    echo "<br>";

    $str_1 = "Arjun";
    $str_2 = "Neupane";

    echo "(Concatenation) The result of \$str_1 . \" \" . \$str_2 is: ";
    echo $str_1 . " " . $str_2;
    echo "<br>";
    echo "(Concatenation and Assignment) The assignment \$str_1 .= \$str_2 is equal to \$str_1 = \$str_1 . \$str_2 ";
    echo "<br>";

    echo $str_1 .= $str_2;

    echo "After assignment \$str_1 .= \$str_2, The value of \$str_1 is $str_1 (Remember, The space was added in the first.)";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Execution Operators";
    echo "<h3>$title</h3>";

    echo "There is 1 execution operators in PHP. It is: <br>";
    echo "<strong>=>`` (Backticks)</strong>";
    echo "<br>";
    echo "The use of execution operator is to execute shell commands.";
    echo "<br>";

    echo "Example:";
    echo "<br>";

    echo "=> echo `dir` will execute the command 'dir' in shell and return the result.";
    echo "<br>";
    echo "See Below for the result of the dir listing the directory list in current directory using &lt;pre&gt; tag.";
    echo "<br>";
    echo "<pre>";
    echo `dir`;
    echo "</pre>";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Error Control Operators";
    echo "<h3>$title</h3>";

    echo "There is 1 error control operators in PHP. It is: <br>";
    echo "<strong>=>'@'</strong>";
    echo "<br>";
    echo "The use of execution operator is suppress the error encountered by using it in the prefix of expression.";
    echo "<br>";
    echo "If i execute '\$fp=fopen(\"nosuchfile.txt\",\"r\"); echo \"Hello World\" ', It will throw me error as below: ";
    echo "<br>";
    echo "<i>";
    $fp = fopen("nosuchfile.txt", "r");
    echo "Hello World";
    echo "</i>";
    echo "<br>";
    echo "<br>";
    echo "But If i execute '\$fp=@fopen(\"nosuchfile.txt\",\"r\"); echo \"Hello World\"', It will supress the error as below: ";
    echo "<br>";
    echo "<br>";
    echo "<i>";
    $fp = @fopen("nosuchfile.txt", "r");
    echo "Hello World";
    echo "</i>";
    echo "<br>";
    echo "<br>";
    echo "So Only Hello World in shown in the above.";
    echo "<br>";
    ?>



</body>

</html>