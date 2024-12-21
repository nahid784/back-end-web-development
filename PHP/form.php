<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order Form</title>
</head>
<body>
    <h1>Order Form</h1>
    <form method="POST" action="">
        <label for="category1">Select Category 1 Product:</label>
        <select name="category1">
            <option value="Product A">Product A - $10</option>
            <option value="Product B">Product B - $15</option>
        </select>
        <br><br>
        <label for="category2">Select Category 2 Product:</label>
        <select name="category2">
            <option value="Product X">Product X - $20</option>
            <option value="Product Y">Product Y - $25</option>
        </select>
        <br><br>
        <label for="shipping">Shipping Cost:</label>
        <input type="number" name="shipping" placeholder="Enter shipping cost">
        <br><br>
        <input type="submit" name="submit" value="Place Order">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        // Retrieve selected products and shipping cost
        $category1 = $_POST['category1'];
        $category2 = $_POST['category2'];
        $shipping = $_POST['shipping'];

        // Prices for products
        $prices = [
            "Product A" => 10,
            "Product B" => 15,
            "Product X" => 20,
            "Product Y" => 25
        ];

        // Calculate total cost
        $totalCost = $prices[$category1] + $prices[$category2] + $shipping;

        // Display order summary
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
