<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
<?php

// arithmethic operator
    $a = 4;
    $b = 2;

    $add = $a + $b;
    $sub = $a - $b;
    $mod = $a % $b; //modulas
    echo"Addition is $add";
    echo "<br>"; 
    echo"Subtraction is $sub";
    echo "<br>"; 
    echo"Modulas is $mod";
    echo "<br>"; 

    // for showing the value datatype
    var_dump ($add);
    echo "<br>";
    var_dump ($sub);
    echo "<br>";

    $a++;
    echo "increament addition is $a";
    echo "<br>";

    // assignment operator
    $a+=5;
    $b*=5;
    // $a = $a + 5; actual meaning
    echo "addition is $a";
    echo "<br>";
    echo "multiplication is $b";
?>
</body>
</html>