<?php

function happy_brithday($name, int  $age)
{

    echo "Happy Birthday, " . $name . "!" . " You are {$age} years old";

    echo "<br>";
}

function hypostenuse(int $a, int $b)
{

    $c = sqrt(($a ** 2) + ($b ** 2));
    echo "The hypotenuse of a triangle with sides of length {$a} and {$b} is: " . $c;
}

function sum(int $num1, int $num2)
{
    echo $num1 + $num2;
}


happy_brithday("John", 23);
sum(5, 10);
hypostenuse(3, 4);
