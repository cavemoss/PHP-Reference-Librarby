<?php

    $grade = "A";

    switch($grade) 
    {
        case "A": echo "You did grate"; break;

        case "B": echo "You did good"; break;

        case "C": echo "You did okay"; break;

        case "D": echo "You did poorly"; break;

        case "F": echo "You failed"; break;
        
        default: echo "$grade is not a valid grade";
    }

?>