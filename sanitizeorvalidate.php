<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<form action="sanitizeorvalidate.php" method="post">
    <input type="text" name="username" value="username">Username<br>
    <input type="text" name="age" value="age">Age<br>
    <input type="text" name="email" value="email">Email<br>
    <input type="submit" name="submit" value="submit"><br>
</form>


<body>

</body>

</html>


<?php

if (isset($_POST["submit"])) {

    //$username = $_POST["username"];
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    echo "Username: " . $username . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Email: " . $email . "<br>";

    if (empty($age)) {
        echo "Invalid Age.Please enter your age";
    } else {
        echo "Your age is: " . $age;
    }

    if (empty($email)) {
        echo "Invalid email.Please enter your email";
    } else {
        echo "Your email is: " . $email;
    }
}
