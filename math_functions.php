<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="math_functions.php" method="post">
        <label>x:</label>
        <input type="text" name="x" /><br>

        <label>y:</label>
        <input type="text" name="y" /><br>

        <label>z:</label>
        <input type="text" name="z" /><br>
        <input type="submit" value="Submit" />
    </form>
</body>

</html>

<?php

print_r($_POST);
echo "<br>";

$x_value = $_POST["x"];
$y_value = $_POST["y"];
$z_value = $_POST["z"];

$abs_value = abs($x_value);

$rounded_value = round($x_value);

$floor_value = floor($x_value);

$ceil_value = ceil($x_value);

$sqrt_value = sqrt($x_value);

$pow_value = pow($x_value, $y_value);

$max_value = max($x_value, $y_value, $z_value);

$min_value = min($x_value, $y_value, $z_value);

$rand_no = rand(1, 100);

echo "Value of x_value is : {$x_value} <br>";
echo "<br>";
echo "The absolute value of {$x_value} is " . abs($x_value) . "<br>";
echo "The rounded value of {$x_value} is " . $rounded_value . "<br>";
echo "The floor value of {$x_value} is " . $floor_value . "<br>";
echo "The ceil value of {$x_value} is " . $ceil_value . "<br>";
echo "<br>";
echo "The square root of {$x_value} is " . $sqrt_value . "<br>";
echo "The maximum value between {$x_value}, {$y_value}, and {$z_value} is " . $max_value . "<br>";
echo "The minimum value between {$x_value}, {$y_value}, and {$z_value} is " . $min_value . "<br>";
echo "<br>";
echo "The {$x_value} to the power of {$y_value} is " . $pow_value . "<br>";
echo "A random number between 1 and 100 is " . $rand_no . "<br>";
