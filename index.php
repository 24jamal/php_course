<?php
$name = "Jake";
$food = "Pizza";
$email = "jake@example.com";

$age = 24;
$quantity = 4;
$gpa = 3;

$price = 9.99;
$sales_tax = 4.1;
$total_price = null;

$employed = true;
$is_online = false;
$for_sale = false;


echo "My name is {$name}. <br>";

echo "I love {$food}";
echo "Your age is {$age} <br>";
echo "There are $quantity items in the cart. <br>";
echo "Your GPA is {$gpa} <br>";

echo "Your pizza costs \${$price} <br>";
echo "Your tax is {$sales_tax}% <br>";

echo "Employed: {$employed} <br>";
echo "Online: {$is_online} <br>";
echo "For Sale: {$for_sale} <br>";

echo "You have ordered {$quantity} x {$food} <br>";
$total_price = $price * $quantity;
echo "Your total is \${$total_price} <br>";
