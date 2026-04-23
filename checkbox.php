<html>

<head>
    <title>Radio Buttons</title>
</head>

<body>
    <form action="checkbox.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">Pizza<br>
        <input type="checkbox" name="burger" value="Burger">Burger<br>
        <input type="checkbox" name="salad" value="Salad">Salad<br>
        <input type="checkbox" name="veggies" value="Veggies">Veggies<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php
print_r($_POST);
echo "<br>";
if (isset($_POST['submit'])) {

    echo "You have submitted form";

    if (isset($_POST['pizza'])) {
        echo "Pizza";
    }
    if (isset($_POST['burger'])) {
        echo "Burger";
    }
    if (isset($_POST['salad'])) {
        echo "Salad";
    }
    if (isset($_POST['veggies'])) {
        echo "Veggies";
    }
}
