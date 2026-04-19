<?php

$x = 10;
$y = 5;

$z = $x + $y;
echo "The sum of {$x} and {$y} is {$z} <br>";

$z = $x - $y;
echo "The difference of {$x} and {$y} is {$z} <br>";

$z = $x * $y;
echo "The product of {$x} and {$y} is {$z} <br>";

$z = $x / $y;
echo "The quotient of {$x} and {$y} is {$z} <br>";

$z = $x % $y;
echo "The modulus of {$x} and {$y} is {$z} <br>";

//Increment and Decrement Operators
$counter = 0;
$counter += 2;
echo "Counter: {$counter} <br>";

//Operator Precedence
//()
// **
// * /  %
// + -
$total = 1 + 2 - 3  * 4 / 5 ** 6;
echo "Total: {$total} <br>";
