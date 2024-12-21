<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array & Foreach</title>
</head>
<body>
<?php
    // Creating an indexed array with values
    $name = array('nahid', 'abir', 'sadman');

    // Using foreach loop to iterate over the indexed array
    foreach ($name as $key => $value){
        echo $key . ' ' . $value . '<br>'; // Display the index (key) and value of each element
    }

    // Creating an associative array with key-value pairs
    $names = array('nahid' => 20, 'abir' => 40, 'sadman' => 30);

    // Using foreach loop to iterate over the associative array
    foreach ($names as $key => $value){
        echo $key . ' ' . $value . '<br>'; // Display the key and its corresponding value
    }

    // Creating an indexed array with numeric values
    $a_array = array(1, 2, 3, 4);

    // Using foreach loop to iterate over the indexed array
    foreach ($a_array as $value) {
        $value = $value * 2; // Multiply each value by 2
        echo $value . '<br>'; // Display the modified value (doubled)
    }
?>
</body>
</html>
