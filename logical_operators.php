<?php


function weather(int $temp, bool $cloudy): void
{

    if ($temp > 0 && $temp < 30) {
        echo "The weather is good.";
    } else {
        echo "The weather is bad.";
    }

    if ($cloudy) {
        echo "It is cloudy. \n";
    } else {
        echo "It is not cloudy.\n";
    }
}


function vote(int $age, bool $citizen): void
{
    if ($age >= 18 && $citizen) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
}

function ticket_price(int $age): void
{

    $senior = false;
    $child = false;
    $price = null;
    if ($age >= 65) {
        $senior = true;
    } else if ($age <= 12) {
        $child = true;
    }

    if ($senior || $child) {
        $price = 10;
    } else {
        $price = 15;
    }


    echo "The ticket price is : " . $price . "$";
}

weather(10, false);
vote(12, true);
ticket_price(17);
