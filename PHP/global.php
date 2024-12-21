<?php
$_SERVER['PHP_SELF'];

echo $_SERVER['PHP_SELF'];
echo '<br>';
echo $_SERVER['SERVER_NAME'];
echo '<br>';
echo $_SERVER['SERVER_ADDR'];
echo '<br>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '<br>';
echo '<br>';

// using request metod to display form info
echo $_REQUEST['req'];
?>
<form action="" method="GET">  
    <input type="text" name="req"><br>
    <input type="submit" name="submit"><br>

</form>
<br>

<?php
// using get metod to display form info
echo $_GET['get'];
?>
<form action="" method="GET">  
    <input type="text" name="get"><br>
    <input type="submit" name="submit"><br>

</form>
<br>

<?php
// using post metod to display form info
echo $_POST['pst'];
?>
<form action="" method="POST">  
    <input type="text" name="pst"><br>
    <input type="submit" name="submit"><br>

</form>
<br>