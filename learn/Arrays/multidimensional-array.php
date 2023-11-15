<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative Array | Arrays</title>
</head>

<body>
  <a href="/i_learn_php/learn/contents.php" style="float: right; position: sticky; top: 0;">
    <h4><i>&#8592; BACK TO CONTENTS</i></h4>
  </a>

  <div style="display: flex; column-gap: 20px; position: fixed; bottom: 0; right: 10px;">

    <a href="/i_learn_php/learn/Arrays/associative-array.php">
      <h2><i>&#8592; Associative-Array</i></h2>
    </a>

    <a href="/i_learn_php/learn/Forms/get-form.php">
      <h2><i>Get-Form &#8594;</i></h2>
    </a>

  </div>

  <?php

  $title = "Multidimensional Array";
  echo "<h2>$title</h2>";

  echo "=>Multidimensional array is also known as array of arrays.";
  echo "<br>";
  echo "=> In order to Define an associative array, you can do in the below way";
  echo "<br>";
  echo "<pre>";
  echo "
    \$emp = array  
      (  
      array(1,\"Radha Baini\",400000),  
      array(2,\"Parbati Bhauju\",500000),  
      array(3,\"Lakshmi Didi\",300000)  
      );   
    ";
  echo "</pre>";

  $title2 = "SYNTAX";
  echo "<h3>$title2</h3>";

  echo "<pre>";
  echo "  
    \$arrayName = array(
        array(element1, element2, ..., elementN),
        array(element1, element2, ..., elementN),
    );
    ";
  echo "</pre>";

  echo "<strong>EXAMPLE</strong>";
  echo "<br>";

  echo "<pre>";
  echo "  
    \$emp = array  
      (  
      array(1,\"Radha Baini\",400000),  
      array(2,\"Parbati Bhauju\",500000),  
      array(3,\"Laxmi Didi\",300000)  
      );  
      
    for (\$row = 0; \$row < 3; \$row++) {  
      for (\$col = 0; \$col < 3; \$col++) {  
        echo \$emp[\$row][\$col].\"  \";  
      }  
      echo \"&lt;br&gt;\";  
    }  
    ";
  echo "</pre>";

  echo "<br>";

  echo "<strong>OUTPUT</strong>";
  echo "<br>";

  $emp = array
  (
    array(1, "Radha Baini", 400000),
    array(2, "Parbati Bhauju", 500000),
    array(3, "Laxmi Didi", 300000)
  );

  for ($row = 0; $row < 3; $row++) {
    for ($col = 0; $col < 3; $col++) {
      echo $emp[$row][$col] . "  ";
    }
    echo "<br>";
  }

  echo "<br>";

  ?>

</body>

</html>