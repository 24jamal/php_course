<?php
function findGrade(string $grade): void
{

    switch ($grade) {
        case 'A':
            echo "Excellent";
            break;

        case 'B':
            echo "Good";
            break;

        case 'C':
            echo "Fair";
            break;

        case 'D':
            echo "Poor";
            break;

        case 'F':
            echo "Fail";
            break;

        default:
            echo "Invalid grade";
            break;
    }
}

findGrade('A');
