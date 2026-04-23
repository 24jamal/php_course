<?php

$username = "Bro code";
$my_name = array("Hello", "World");
$phone = "1234-5678-9012";

$upper = strtolower($username);
$lower = strtoupper($username);
$trim = trim($username);
$strpad =  str_pad($username, 20, "*");
$strrev = strrev($username);
$strshuffle = str_shuffle($username);
$equals = strcmp($username, "Bro code");
$count = strlen($username);
$index = strpos($username, " ");
$firstname = substr($username, 0, 3);
$lastname = substr($username, 4);
$helloworld = implode("-", $my_name);

echo $upper . "<br>";
echo $lower . "<br>";
echo $trim . "<br>";
echo $strpad . "<br>";
echo str_replace("-", "", $phone);
echo $strrev . "<br>";
echo $strshuffle . "<br>";
echo $equals . "<br>";
echo $count . "<br>";
echo $index . "<br>";
echo $firstname . "<br>";
echo $lastname . "<br>";
echo $helloworld . "<br>";
