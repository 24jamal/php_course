<html>

<head>
    <title>For Loop</title>
</head>

<body>
    <h1>For Loop</h1>
    <form action="for_loop.php" method="post">
        <label>Enter a number to count down:</label>
        <input type="number" name="number">
        <input type="submit" value="Submit">
    </form>
</body>


</html>
<?php
$number = $_POST['number'];


for ($i = $number; $i > 0; $i--) {
    echo "$i <br>";
}
