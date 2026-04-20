<?php


function isEligibleage(int $age): void
{

    if ($age >= 100) {
        echo "You are too old enter this site";
    } else if ($age >= 18) {
        echo "You are an adult.";
    } else if ($age <= 0) {
        echo "Invalid number.";
    } else {
        echo "You wasnt 18 + years to enter this site.";
    }
}

function wages(int $hours): void
{

    $hours = $hours;


    if ($hours < 0) {
        echo "Invalid Number";
    } else if ($hours <= 40) {
        echo "You will earn : " . $hours * 1.5 . "$";
    } else if ($hours > 40) {
        echo "You will earn : " . (40 * 1.5 + ((($hours - 40) * 2.5))) . "$";
    }
}


//isEligibleage(19);
wages(41);
