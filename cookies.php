<?php

setcookie("fav_food", "Pizza", time() + 86400 * 1, "/");
setcookie("fav_drink", "Sugarcane Juice", time() + 86400 * 1, "/");
setcookie("fav_place", "Munnar", time() + 86400 * 1, "/");


foreach ($_COOKIE as $key => $value) {
    echo "Key - " . $key . " Value - " . $value . "<br>";
}

if (isset($_COOKIE["fav_food"])) {
    //echo "Youre fav food is :{$_COOKIE["fav_food"]}";
}
