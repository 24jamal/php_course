<?php

$password = "Hello";

$hashed_password = password_hash($password, PASSWORD_DEFAULT);


echo $hashed_password . "<br>";

if (password_verify("Hello", $hashed_password)) {

    echo "Password is correct";
} else {
    echo "Password is incorrect";
}
