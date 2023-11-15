<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch-Case | Control_Statements</title>
</head>

<body>

    <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
        <h4><i>&#8592; BACK TO CONTENTS</i></h4>
    </a>

    <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

        <a href="/i_learn_php/learn/Control-Statements/if-else.php">
            <h2><i>&#8592; If-Else</i></h2>
        </a>

        <a href="/i_learn_php/learn/Control-Statements/loop.php">
            <h2><i>Loop &#8594;</i></h2>
        </a>

    </div>


    <?php


    $title = "Syntax";
    echo "<h3>$title</h3>";

    echo "<pre>";
    echo "  switch(expression){      
    case value1:      
        //code to be executed  
        break;  
    case value2:      
        //code to be executed  
        break;  
    ......      
    default:       
        code to be executed if all cases are not matched;       
  } ";
    echo "</pre>";
    echo "<br>";

    echo "*Note:";
    echo "<br>";
    echo "<strong>PHP switch statement is fall-through: </strong>It means it will execute all statements after getting the first match, if break statement is not found.";
    echo "<br>";
    echo "<strong>EXAMPLE</strong>";
    echo "<pre>";
    echo "
&lt;?php      
    \$ch = 'c';  
    switch (\$ch)  
    {     
        case 'a':   
            echo \"Choice a\";  
            break;  
        case 'b':   
            echo \"Choice b\";  
            break;  
        case 'c':   
            echo \"Choice c\";      
            echo \"&lt;/br&gt;\";  
        case 'd':   
            echo \"Choice d\";  
            echo \"&lt;/br&gt;\";  
        default:   
            echo \"case a, b, c, and d is not found\";  
    }  
?>  
    ";
    echo "</pre>";
    echo "<br>";
    echo "<strong>OUTPUT</strong>";
    echo "<pre>";
    echo "
    Choice c
    Choice d
    case a, b, c, and d is not found
    ";
    echo "</pre>";
    ?>

</body>

</html>