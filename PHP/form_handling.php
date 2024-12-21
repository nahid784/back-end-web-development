<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling</title>
</head>
<body>

<?php
// Initialize a variable to store error messages
$err = '';

// Check if both 'fname' and 'email' are submitted
if (isset($_POST['fname']) && isset($_POST['email'])) {
    // Get the values submitted from the form
    $name = $_POST['fname'];
    $mail = $_POST['email'];
    
    // Check if the 'name' field is empty and 'email' is set
    if (empty($name) && isset($mail)) {
        // Display an error message if the name is empty
        echo "Fill up all the fields";
        $err = "Fill up the field"; // Store the error message in the $err variable
    } else {
        // Display success message if both fields are filled
        echo "Form submitted successfully";
    }
}

?>
<br>
<!-- Form for user input -->
<form action="form_handling.php" method="post">
   <!-- Name input field with placeholder and error message display -->
   Name: <input type="text" name="fname" placeholder="Enter name"> <?php echo $err ?><br> <br>

   <!-- Email input field -->
   Email: <input type="email" name="email" placeholder="Enter Email"><br> <br>

   <!-- Submit button -->
   <input type="submit" value="Submit">
</form>

</body>
</html>
