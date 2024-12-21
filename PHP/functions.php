<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>
<body>
<?php
    // Simple function with no parameters and no return value
    function fname_info(){
        echo "Thanks for watching <br>"; // Display message
    }
    fname_info(); // Call the fname_info function

    // Function with one parameter (num)
    function sum($num){
        echo $num; // Display the value passed as $num
    }
    sum(2); // Call the sum function with the argument 2
    echo "<br>";

    // Function with two parameters (num1, num2)
    function sums($num1, $num2){
        echo $num1 + $num2; // Display the sum of num1 and num2
    }
    sums(2, 4); // Call the sums function with arguments 2 and 4
    echo "<br>";
    
    // Function with two parameters (name, age)
    function info($name, $age){
        echo "Name is: " . $name . " & age is: " . $age; // Concatenate and display name and age
    }
    info("Nahid", 25); // Call the info function with arguments "Nahid" and 25
    echo "<br>";
    
    // Function with two integer parameters (a, b), returning the sum of both
    function third(int $a, int $b){
        $z = $a + $b; // Calculate the sum of a and b
        return $z; // Return the result
    }
    echo third(20, 25); // Call the third function with arguments 20 and 25 and display the returned result
    echo "<br>";
?>
</body>
</html>
