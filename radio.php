<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="radio.php" method="post">
        <input type="radio" name="credit-card" value="Visa" />Visa<br>
        <input type="radio" name="credit-card" value="MasterCard" />MasterCard<br>
        <input type="radio" name="credit-card" value="Discover" />Discover<br>
        <input type="radio" name="credit-card" value="Amex" />American Express<br>
        <input type="submit" name="submit" value="Submit">
    </form>

</body>

</html>

<?php

if (isset($_POST["submit"])) {
    echo "You have submitted the form";
    if (isset($_POST["credit-card"])) {
        echo " You have selected: " . $_POST["credit-card"] . "<br>";
    }

    if ($_POST["credit-card"] == "Visa") {
        echo "Visa";
    } else if ($_POST["credit-card"] == "MasterCard") {
        echo "MasterCard";
    } else if ($_POST["credit-card"] == "Discover") {
        echo "Discover";
    } else if ($_POST["credit-card"] == "Amex") {
        echo "American Express";
    }
}
