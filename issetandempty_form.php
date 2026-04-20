<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="issetandempty_form.php" method="post">
        <label>Username</label>
        <input type="text" name="name">
        <label>Password</label>
        <input type="password" name="password">
        <input type="submit" name="login" value="Log In">
    </form>



</body>

</html>

<?php

print_r($_POST);


$username = $_POST['name'];
$password = $_POST['password'];


if (isset($username)) {
    if (empty($username)) {
        echo "Please enter your username.";
    } else if (empty($password)) {
        echo "Please enter your password.";
    } else {
        echo "Welcome, " . $_POST['name'] . "!";
    }
}

?>