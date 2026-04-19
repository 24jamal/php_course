<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Super Global Arrays - Login</title>
</head>

<body>
    <form action="super_global_arrays.php" method="post">
        <label>username:</label>
        <input type="text" name="username" /><br>
        <label>password</label>
        <input type="password" name="password" /><br>
        <input type="submit" value="Log in" />
    </form>
</body>

</html>

<?php
// for $_GET and $POST have respective methods in the form tag. $_GET will append the data to the URL, while $_POST will send the data in the request body, making it more secure for sensitive information like passwords.
// echo $_GET["username"] . "<br>"; 
// echo $_GET["password"] . "<br>";
echo $_POST["username"] . "<br>";
echo $_POST["password"] . "<br>";
print_r($_POST);
//$_GET = Data is appended to the url
// Not Secure
// char limit 
// Bookmark  is possible w/ values
// GET requests  can be cached
// Better for search page


//$_POST = Data is packaged inside the body of the HTTP request
// More secure than GET
// No data limit
// Cannot bookmark
// POST requests cannot be cached
// Better for submitting  credentials