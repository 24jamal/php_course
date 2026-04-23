<html>

<head>
    <title>Radio Buttons</title>
</head>

<body>
    <form action="checkbox_values.php" method="post">
        <input type="checkbox" name="food[]" value="Pizza">Pizza<br>
        <input type="checkbox" name="food[]" value="Burger">Burger<br>
        <input type="checkbox" name="food[]" value="Salad">Salad<br>
        <input type="checkbox" name="food[]" value="Veggies">Veggies<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
print_r($_POST);
echo "<br>";
if (isset($_POST['submit'])) {

    $foods = $_POST['food'];

    foreach ($foods as $food) {
        echo $food . "<br> ";
    }
}
