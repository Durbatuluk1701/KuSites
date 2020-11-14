<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $hamburger = $_POST["hamburger"];
    $fries = $_POST["fries"];
    $coke = $_POST["coke"];
    $shipping = $_POST["shipping"];
    echo "<!DOCTYPE html><html><head><title>Store Receipt</title>";
    echo "<link rel='stylesheet' type='text/css' href='style2.css' /></head>";
    echo "<body>";
    echo "<h1>Store Receipt</h1>";
    echo "<h2>User</h2>";
    echo "<h4>Welcome '$username'</h4>";
    echo "<h4>Your password is '$password'</h4>";
    echo "<h2>Your Order</h2>";
    echo "<table id='store-receipt'>";
    echo "<tr><th>Item</th><th>Quantity</th><th>Cost Per Item</th><th>Sub-Total</th></tr>";
    $hamCost = $hamburger * 5;
    echo "<tr><td>Hamburger</td><td>$hamburger</td><td>$5.00</td><td>\$$hamCost</td></tr>";
    $fryCost = $fries * 3;
    echo "<tr><td>Fries</td><td>$fries</td><td>$3.00</td><td>\$$fryCost</td></tr>";
    $cokeCost = $coke * 2;
    echo "<tr><td>Coke</td><td>$coke</td><td>$2.00</td><td>\$$cokeCost</td></tr>";

    if ($shipping == 1) {
        $shippingCost = 0;
    } else if ($shipping == 3) {
        $shippingCost = 5;
    } else {
        $shippingCost = 50;
    }
    echo "<tr><td>Shipping</td><td>$shipping Days</td><td></td><td>\$$shippingCost</td></tr>";
    $total = $hamCost + $fryCost + $cokeCost + $shippingCost;
    echo "<tr><td></td><td>Total</td><td></td><td>\$$total</td></tr>";
    echo "</body>";
    echo "</html>";
?>