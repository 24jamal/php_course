<?php
include("database.php");

$username = "John";
$password = "Football";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password) 
        VALUES ('$username','$hash')";


try {
    mysqli_query($conn, $sql);
    echo "User is registered";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}



mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello
</body>

</html>