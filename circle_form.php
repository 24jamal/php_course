<html>

<head>
    <title>Circumference of a circle</title>
</head>

<body>

    <form action="circle_form.php" method="post">
        <label>Radius (cm): </label>
        <input type="text" name="radius" /><br>
        <input type="submit" value="Calculate" />
    </form>
</body>

</html>

<?php

echo $_POST["radius"] . "<br>";

$radius = $_POST["radius"];

$circumference = 2 * pi() * $radius;

$area = pi() * pow($radius, 2);

$volume = (4 / 3) * pi() * pow($radius, 3);


$circumference = round($circumference, 2);
$area = round($area, 2);
$volume = round($volume, 2);
echo "The circumference of a circle with radius {$radius} is {$circumference} cm <br>";
echo "The area of a circle with radius {$radius} is {$area} cm² <br>";
echo "The volume of a sphere with radius {$radius} is {$volume} cm³ <br>";
