<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If-Else Condition Example</title>
</head>
<body>
<?php
// Declaring a variable to store the username
$username = "abir";

// First condition: Checking if the username matches "abir"
// This condition evaluates to true since $username is "abir"
if($username == "abir"){
    echo "Login Successfully"; // Output when the condition is true
} else {
    echo "Login error"; // Output when the condition is false
}

echo "<br>"; // Adding a line break for better output formatting

// Second condition: Checking if the username matches "Nahid"
// This condition evaluates to false since $username is "abir"
if($username == "Nahid"){
    echo "Login Successfully"; // Output when the condition is true
} else {
    echo "Login error"; // Output when the condition is false
}
?>
</body>
</html>
