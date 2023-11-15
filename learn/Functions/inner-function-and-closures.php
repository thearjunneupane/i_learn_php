<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inner Function And Closures | Functions</title>
</head>

<body>
    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Functions/function.php">
            <h2><i>&#8592; Function</i></h2>
        </a>

        <a href="/i_learn_php/learn/Arrays/indexed-array.php">
            <h2><i>Indexed-Array &#8594;</i></h2>
        </a>

    </div>

    <?php

    $title = "Inner Function";
    echo "<h2>$title</h2>";

    echo "=> Nesting a Function means having multiple functions called child functions within a particular Function called the parent function.";
    echo "<br>";
    echo "=> In order to Nest a Function, you must have a parent function, then child function(s) within it.";
    echo "<br>";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    function outerFunction(\$param) {

        \$innerFunction = function(\$innerParam) {

            return \$innerParam;
        };
    
        \$result = \$innerFunction(\$param);
    
        return \$result;
    }  
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function outerFunction(\$param) {

        \$innerFunction = function(\$innerParam) {

            return \$innerParam * 2;
        };
    
        // Call the inner function
        \$result = \$innerFunction(\$param);
    
        return \$result;
    }
    
    \$output = outerFunction(5);
    
    echo \"The Output is: \$output\";
        
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function outerFunction($param)
    {

        $innerFunction = function ($innerParam) {

            return $innerParam * 2;
        };

        // Call the inner function
        $result = $innerFunction($param);

        return $result;
    }

    $output = outerFunction(5);

    echo "The Output is: $output";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Closures";
    echo "<h2>$title</h2>";

    echo "=> In PHP, you can return a function from another function by using anonymous functions (also known as closures) or by returning the name of a function as a string.";
    echo "<br>";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    function outerFunction(\$param) {

        return function (\$param) {
            // Do somthing
        };
    }  

    \$innerFunction = outerFunction();

    \$innerfunction(\"Do something\")
    ";
    echo "</pre>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function aParentFunction(\$outerParam) {

        return function (\$innerParam) use (\$outerParam) {
            echo \"Outer parameter: \$outerParam, Inner parameter: \$innerParam\";
        };
    }
    
    \$closure = aParentFunction(\"Hello\");
    
    \$closure(\"World\");
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function aParentFunction($outerParam)
    {

        return function ($innerParam) use ($outerParam) {
            echo "Outer parameter: $outerParam, <br> Inner parameter: $innerParam";
        };
    }

    $closure = aParentFunction("Hello");

    $closure("World");
    echo "<br>";
    echo "<br>";

    echo "*Note: You must wonder what the fkn 'use' is doing there since it's not in the syntax. Yes you are right its likea bonus for the example";
    echo "<br>";
    echo "=> The 'use' keyword is there so that we can use the parameter which is passed in its parent function.";
    echo "<br>";
    echo "=> If you donot use that 'use' keyword you will not be able to use the '\$outerParam'. So using 'use' can make us 'Parameter Rich'";
    echo "<br>";

    ?>

    <hr>

    <?php

    $title = "Multiple Closures";
    echo "<h2>$title</h2>";

    echo "=> In PHP, you can return multiple functions from a function by returning them as an array.";
    echo "<br>";
    echo "<br>";

    $title2 = "Syntax";
    echo "<h3>$title2</h3>";

    echo "<pre>";
    echo "  
    function generateFunctions() {
        \$function1 = function (\$param) {
            // Do something
        };
    
        \$function2 = function (\$param) {
            // Do something
        };
    
        return [\$function1, \$function2];
    }  

    \$functions = generateFunctions();
    
    \$functions[0](\"Do somthing\");
    
    \$functions[1](\"Do somthing\");
    ";
    echo "</pre>";
    echo "<br>";

    echo "But I think you also think the above is not looking that much sexy code. Calling funtion with an index, ugh!";
    echo "<br>";
    echo "So, To make the code look sexy, We can use associative array to name the functions.";
    echo "<br>";
    echo "<br>";

    echo "<strong>EXAMPLE</strong>";
    echo "<br>";

    echo "<pre>";
    echo "
    function anAnotherParentFunction(\$param1, \$param2) {
        \$functions = [
            \"function1\" => function() use (\$param1) {
                echo \"Function 1 called with parameter: \$param1\";
            },
            \"function2\" => function() use (\$param2) {
                echo \"Function 2 called with parameter: \$param2\";
            },
        ];
    
        return \$functions;
    }
    
    \$namedFunctions = anAnotherParentFunction(\"Namaste\", \"World\");
    \$namedFunctions['function11']();
    \$namedFunctions['function22']();
    ";
    echo "</pre>";

    echo "<br>";

    echo "<strong>OUTPUT</strong>";
    echo "<br>";

    function anAnotherParentFunction($param1, $param2)
    {
        $functions = [
            "function1" => function () use ($param1) {
                echo "Function 1 called with parameter: $param1";
            },
            "function2" => function () use ($param2) {
                echo "Function 2 called with parameter: $param2";
            },
        ];

        return $functions;
    }

    $namedFunctions = anAnotherParentFunction("Namste", "World");

    $namedFunctions['function1']();
    echo "<br>";
    $namedFunctions['function2']();


    echo "<br>";
    echo "<br>";

    echo "<strong>*gotcha</strong>:<br> Theres a gotcha in the above program. If You try to concatenate some strings with the the child function's string. For example:";
    echo "<pre>";
    echo "
    echo \"Hell Yeah\" . \$namedFunctions['function1']();
    echo \"Heaven Yeah\" . \$namedFunctions['function2']();
    ";
    echo "</pre>";
    echo "Then, The output will be like this:";
    echo "<br>";

    echo "Hell Yeah" . $namedFunctions['function1']();
    echo "<br>";
    echo "Heaven Yeah" . $namedFunctions['function2']();

    echo "<br>";
    echo "<br>";
    echo "See, I was concatenating the new strings before the function but the output make it to at last.";
    echo "<br>";
    echo "Let's Breakdown What Happend!";
    echo "<br>";
    echo "=> The output you are observing is due to the fact that the anonymous functions in your \$functions array are using echo to output the text, and they don't return any values.";
    echo "<br>";
    echo "=> When you try to concatenate the result of calling these functions with a string, you are actually concatenating null because the functions don't explicitly return anything.";
    echo "<br>";
    echo "<br>";
    echo "*Note: To achieve the desired behavior, you should modify the anonymous functions to 'return' the strings instead of using 'echo' directly.";
    echo "<br>";
    echo "TRY ON YOUR OWN. JUST CHANGE 'echo' IN THE CHILD FUNCTION WITH 'return'.";
    echo "<br>";


    ?>



</body>

</html>