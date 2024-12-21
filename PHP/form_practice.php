<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Form</title>
</head>
<body>
<h3>
Utilize the PHP code that would be saved in the database to process the order form. The user can order two categories products at a time. You should display the ordered products list. Your code should also compute the total cost of the order and shipping cost added to the order. The user can search from the webpages to the order. If the order is done, also print a "Thank you for your order!" message at the bottom of your output.

(Note: Don't forget to design a user-friendly form for this particular scenario).

</h3>
<br>
    <h1>Order Form</h1>

    <!-- Order form starts here -->
    <form method="POST" action="">
        <!-- Category 1 product selection -->
        <label for="category1">Select Category 1 Product:</label>
        <select name="category1">
            <option value="Product A">Product A - $10</option>
            <option value="Product B">Product B - $15</option>
        </select>
        <br><br>

        <!-- Category 2 product selection -->
        <label for="category2">Select Category 2 Product:</label>
        <select name="category2">
            <option value="Product X">Product X - $20</option>
            <option value="Product Y">Product Y - $25</option>
        </select>
        <br><br>

        <!-- Shipping cost input -->
        <label for="shipping">Shipping Cost:</label>
        <input type="number" name="shipping" placeholder="Enter shipping cost">
        <br><br>

        <!-- Submit button to place the order -->
        <input type="submit" name="submit" value="Place Order">
    </form>

    <?php
    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        // Retrieve the selected products and the shipping cost from the form
        $category1 = $_POST['category1'];
        $category2 = $_POST['category2'];
        $shipping = $_POST['shipping'];

        // Prices for each product are stored in an associative array
        $prices = [
            "Product A" => 10,
            "Product B" => 15,
            "Product X" => 20,
            "Product Y" => 25
        ];

        // Calculate the total cost by adding the prices of the selected products and the shipping cost
        $totalCost = $prices[$category1] + $prices[$category2] + $shipping;

        // Display the order summary
        echo "<h2>Order Summary</h2>";
        echo "Product 1: $category1 ($" . $prices[$category1] . ")<br>";
        echo "Product 2: $category2 ($" . $prices[$category2] . ")<br>";
        echo "Shipping Cost: $$shipping<br>";
        echo "Total Cost: $$totalCost<br>";
        echo "<p>Thank you for your order!</p>";
    }
    ?>

</body>
</html>
