<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
<?php

// Arithmetic operators
    $a = 4; // Initialize variable $a with value 4
    $b = 2; // Initialize variable $b with value 2

    $add = $a + $b; // Addition
    $sub = $a - $b; // Subtraction
    $mod = $a % $b; // Modulus (remainder of division)
    echo "Addition is $add"; // Display addition result
    echo "<br>"; 
    echo "Subtraction is $sub"; // Display subtraction result
    echo "<br>"; 
    echo "Modulus is $mod"; // Display modulus result
    echo "<br>"; 

    // Displaying the datatype of the results using var_dump
    var_dump($add); // Show datatype of $add
    echo "<br>";
    var_dump($sub); // Show datatype of $sub
    echo "<br>";

    // Increment operator
    $a++; // Increment $a by 1
    echo "Incremented addition is $a"; // Display incremented value of $a
    echo "<br>";

    // Assignment operators
    $a += 5; // Add 5 to $a and assign the result to $a
    $b *= 5; // Multiply $b by 5 and assign the result to $b
    // The equivalent of $a = $a + 5 and $b = $b * 5
    echo "Addition after assignment is $a"; // Display updated value of $a
    echo "<br>";
    echo "Multiplication after assignment is $b"; // Display updated value of $b

    echo "<br>";

    // Logical operators
    if ($a || $b) { // Check if either $a or $b is true (non-zero)
        echo "true"; // If either is true, output "true"
    } else {
        echo "false"; // If both are false (zero), output "false"
    }

?>
</body>
</html>
