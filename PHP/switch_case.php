<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Case</title>
</head>
<body>
<?php
$name = "php"; // Initialize the variable $name with the value "php"

// Start the switch statement to check the value of $name
switch($name){
    case "php": // Check if $name is equal to "php"
        echo "php tutorial"; // If true, output "php tutorial"
        break; // Exit the switch statement after this case

    case "html": // Check if $name is equal to "html"
        echo "html tutorial"; // If true, output "html tutorial"
        break; // Exit the switch statement after this case

    case "css": // Check if $name is equal to "css"
        echo "css tutorial"; // If true, output "css tutorial"
        break; // Exit the switch statement after this case

    case "js": // Check if $name is equal to "js"
        echo "js tutorial"; // If true, output "js tutorial"
        break; // Exit the switch statement after this case

    default: // If none of the above cases match, execute this block
        echo "don't show"; // Output "don't show" when no match is found
}
?>
</body>
</html>
