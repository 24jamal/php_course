<?php

session_start();

$_SESSION["username"] = "Jamal";
$_SESSION["role"] = "admin";

foreach ($_SESSION as $key => $value) {
    echo "Key - " . $key . " Value - " . $value . "<br>";
}
