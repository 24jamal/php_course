<?php

$foods = array("Pizza", "Burger", "Pasta", "Salad");
array_push($foods, "Biryani");
echo "$foods[0] <br>";
array_shift($foods);
echo "$foods[0] <br>";

array_pop($foods);
echo "$foods[0] <br>";

foreach ($foods as $food) {
    echo $food . "<br>";
}
