<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="super_global_arrays_restaurant.php" method="post">
        <label>Food</label>
        <input type="text" name="food" /><br>
        <label>Quantity</label>
        <input type="number" name="quantity" /><br>
        <input type="submit" value="Order" />
    </form>


</body>

</html>

<?php
print_r($_GET);
echo "<br>";

$price = 11.99;
$var_food = $_POST["food"];
$var_quantity = $_POST["quantity"];

echo "You have ordered {$var_quantity} x {$var_food} <br>";
$total_price = $price * $var_quantity;
echo "Your total is \${$total_price} <br>";

echo $var_quantity;
