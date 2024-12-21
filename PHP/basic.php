<html>
<head></head>
<!-- scalars.php -->
<body>
<?php
// Variable declaration with scalar values
$name = "nahid"; // A string variable to store the name
$salary = 12000; // An integer variable to store the salary
$add = "dhaka"; // A string variable to store the address

// Displaying the variables using echo
echo "His name is $name and his salary is $salary. He lives in $add.";

echo "<br>"; // Adding a line break for better readability in the browser output

// Boolean value declaration
$isadmin = true; // A boolean variable to indicate if the user is an admin
echo $isadmin; // Displaying the boolean value (1 for true, nothing for false)

echo "<br>"; // Adding another line break

// Demonstrating single quotation string behavior
echo 'Hello this is $name and my salary is $salary'; 
// Output will not replace variables with their values because single quotes do not parse variables

echo "<br>"; // Adding another line break

// Demonstrating variable variables
$first_name = "abir"; // A string variable storing the first name
$Name = "first_name"; // A string variable with the name of another variable
echo $$Name; // Output will be the value of the variable named by $Name, i.e., "abir"

echo "<br>"; // Adding another line break

// for deining constant values.
define("NAME", "Nahid");
echo NAME;
echo "<br>";

include 'database.php'; //include will allow to go on, but will show warning msg

require 'database1.php'; //require will not allow and will show fatal error
?>

<!-- Embedding dynamic PHP values within HTML -->
<!-- Displaying the first name and salary dynamically -->
<h1>Hello <?php echo $first_name; ?>, your salary is <?php echo $salary; ?></h1>

</body>
</html>
