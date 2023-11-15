<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function | Function</title>
</head>

<body>

    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Control-Statements/loop.php">
            <h2><i>&#8592; Loop</i></h2>
        </a>

        <a href="/i_learn_php/learn/Functions/inner-function-and-closures.php">
            <h2><i>Inner-Functions &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "Functions";
    echo "<h2>$title</h2>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    function functionname(){  
        //code to be executed  
        }  
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function Greet() {
        echo \"Namaste World!!\";
    }

    Greet();
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function Greet()
    {
        echo "Namaste World!!";
    }

    Greet();

    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Arguments";
    echo "<h2>$title</h2>";

    echo "=> The info passed in the function is called arguments.";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function GreetPerson(\$name) {
        echo \"Namaste \$name!!\";
    }

    GreetPerson(\"Arjun\");
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function GreetPerson($name)
    {
        echo "Namaste $name";
    }

    GreetPerson("Arjun");
    ;

    echo "<br>";
    echo "<br>";

    echo "=> In the above example the \"Arjun\" is an argument passed and the function get it throught the variable \$name.";
    echo "<br>";
    echo "=> In This way multiple arguments can be passed in a function depending on the function, made to accept how much arguments.";
    echo "<br>";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Call By Reference";
    echo "<h2>$title</h2>";

    echo "=> The Value passed to the function doesn't modify the actual value by default (call by value as done above).";
    echo "<br>";
    echo "=> To change the actual value, we can use call by reference.";
    echo "<br>";
    echo "=> You need to use ampersand (&) symbol before the argument name.";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    \$my_var = \"Human is Person\"
    function Changify(&\$info) {
        \$info = \"Person is Human\"
    }
    echo \"Before Function: \$my_var = Human is Person
    Changify(\$my_var);
    echo \"After Function: \$my_var = Person is Human

    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    $my_var = "Human is Person";
    function Changify(&$info)
    {
        $info = "Person is Human";
    }
    echo "Before Function: \$my_var =  $my_var";
    echo "<br>";
    Changify($my_var);
    echo "After Function: \$my_var =  $my_var";
    echo "<br>";
    echo "<br>";

    echo "=> In the above example, the example and output talks itself what is being done.";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Default Argument Value";
    echo "<h2>$title</h2>";

    echo "=> if you don't specify any argument, it will take the default argument..";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function Defaultify(\$name = \"Noone\")
    {
        echo \"Namste \$name\";
    }
    echo \"When i use an argument as \"Arjun\": \";
    Defaultify(\"Arjun\");
    echo \"When i use no arguments: \";
    Defaultify();
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function Defaultify($name = "Noone")
    {
        echo "Namste $name";
    }
    echo "When i use an argument as \"Arjun\": ";
    echo "<br>";
    Defaultify("Arjun");
    echo "<br>";
    echo "When i use no arguments: ";
    echo "<br>";
    Defaultify();
    echo "<br>";
    echo "<br>";

    echo "=> In the above example, the default \"Noone\" is printed itself when no argument is passed.";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Returning Value";
    echo "<h2>$title</h2>";

    echo "=> If you return something from inside a function it can be stored in a variable.";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function Returnify(\$n1, \$n2)
    {
        \$sum = \$n1 + \$n2;
        return \$sum;
    }
    \$gotSum = Returnify(19, 1); 
    echo \"The Sum is: \".\$gotSum;
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function Returnify($n1, $n2)
    {
        $sum = $n1 + $n2;
        return $sum;
    }
    $gotSum = Returnify(19, 1);
    echo "The Sum is: " . $gotSum;
    echo "<br>";
    echo "<br>";

    echo "=> In the above example, The sum of 19+1 is first returned by Returnify() function and stored in the \$gotSum variable and the \$gotSum variable value became 20.";
    echo "<br>";
    echo "<br>";
    echo "*Note: If you want to return multiple value from a function you have to return an array like 'return [\$sum, \$diff]' and to get the sum only index should be given like '\$gotSum[0]' .";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Unknown Arguments Length";
    echo "<h2>$title</h2>";

    echo "=> If you want to give a function multiple arguments (n arguments) than it is possible using ellipses.";
    echo "<br>";
    echo "=> You need to use 3 ellipses (dots) before the argument name.";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
function addAll(...\$nums)
{
    \$sum = 0;
   foreach(\$nums as \$num) {
    \$sum += \$num;
   }
    return \$sum;
}
\$allNumSum = addAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); 
echo \"The Sum is: \".\$allNumSum;
";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function addAll(...$nums)
    {
        $sum = 0;
        foreach ($nums as $num) {
            $sum += $num;
        }
        return $sum;
    }
    $allNumSum = addAll(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
    echo "The Sum is: " . $allNumSum;
    echo "<br>";
    echo "<br>";

    echo "=> In the above example, I donot specify how much number of arguments to be taken in function addAll(). The ellipses(...) does all for us. Just a foreach() loop helps us to sum all.";
    echo "<br>";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Function Recursive";
    echo "<h2>$title</h2>";

    echo "=> If you call current function within function, it is known as recursion. ";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "  
    function display(\$number) {    
        if(\$number<=5){    
         echo \"\$number\";    
         display(\$number+1);    
        }  
    }    
        
    display(1);     
";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function display($number)
    {
        if ($number <= 5) {
            echo "$number <br/>";
            display($number + 1);
        }
    }

    display(1);
    echo "<br>";
    echo "<br>";

    echo "*Note: It is recommended to avoid recursive function call over 200 recursion level because it may smash the stack and may cause the termination of script.";
    echo "<br>";
    echo "<br>";

    ?>


</body>

</html>