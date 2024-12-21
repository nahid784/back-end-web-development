<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Practice</title>
</head>
<body>

<h3> Create a basic PHP script to handle a form submission. The form should collect a user's name and email. Once the form is submitted:
i. Display the submitted name and email on the same page.
ii. If either the name or email field is left empty, display an error message: "All fields are required."

Use the POST method to handle the form submission. Ensure that the output or error message is displayed only after the form is submitted.
</h3><br>

<!-- Start of the HTML form -->
<form action="" method="POST">
    <!-- User name input field -->
    <p> User Name: <input type="text" name="name"> </p>

    <!-- User email input field -->
    <p> Email: <input type="email" name="email"> </p>

    <!-- Submit button to send the form data -->
    <input type="submit" name="submit" value="submit">
</form>

<?php

    // Check if the form is submitted
    if(isset($_POST['submit'])){
        // Retrieve the values of the 'name', 'email' and 'submit' fields from the form
        $user = $_POST['name'];
        $mail = $_POST['email'];
        $submit = $_POST['submit'];

        // Check if both 'name' and 'email' fields are empty
        if(empty($user) && empty($mail)){
            // Display an error message if both fields are empty
            echo "All fields are required";
        }
        else{
            // Display user information if both fields are filled
            echo "<h2> User info</h2>";
            echo "User name: $user <br>";
            echo "User email: $mail <br>";
        }
    }

?>
</body>
</html>
