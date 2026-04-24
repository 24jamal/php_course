<?php
include("database.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label>Username</label>
        <input type="text" name="username" /><br>
        <label>Password</label>
        <input type="password" name="password" /><br>
        <input type="submit" name="submit" />
    </form>


</body>

</html>
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // if (!empty($_POST["submit"]))

    echo $_SERVER["REQUEST_METHOD"] . "<br>";
    echo $_POST["submit"] . "<br>";

    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    // $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $usernme = filter_var($_POST["username"], FILTER_SANITIZE_SPECIAL_CHARS);
    $passwrd = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);

    $username = $usernme;
    $password = $passwrd;


    if (empty($username)) {
        echo "Username is empty";
    } else if (empty($password)) {
        echo "password is empty";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user,password) VALUES ('$username', '$hash')";

        try {
            mysqli_query($conn, $sql);
            echo "youre now registered";
        } catch (mysqli_sql_exception $e) {
            echo "Username is taken.Try another one" . $e;
        }
    }
}

mysqli_close($conn);
?>