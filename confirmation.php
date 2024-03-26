<?php
if(isset($_POST['selqty']) && isset($_POST['selcolour']) && isset($_POST['txtprice'])) {
    $qty = $_POST['selqty'];
    $colour = $_POST['selcolour'];
    $price = $_POST['txtprice'];

    // Calculate total price
    $totalPrice = $qty * $price;

    // Display order details
    echo "<h2>Your order qty is $qty</h2><br/>";
    echo "<h2>Selected colour: $colour</h2><br/>";
    echo "<h2>Total price: $totalPrice</h2>";
} else {
    echo "Error: Order details missing.";
}
?>