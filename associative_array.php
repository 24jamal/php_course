<?php

$capitals = array(
    "USA" => "Washingtone DC",
    "India" => "New Delhi",
    "France" => "Paris",
    "Japan" => "Tokyo"
);
$capitals["USA"] = "New york";
$capitals["China"] = "Beijing";
array_pop($capitals);
array_shift($capitals);
$keys = array_keys($capitals);
$values = array_values($capitals);
$capitals = array_flip($capitals);
$capitals = array_reverse($capitals);
echo count($capitals) . "<br>";
echo "Keys : <br>";
foreach ($keys as $key) {
    echo "$key <br>";
}


echo "Values : <br>";
foreach ($values as $value) {
    echo "$value <br>";
}

echo "<br>";

foreach ($capitals as $key => $value) {
    echo "$key = $value <br>";
}
