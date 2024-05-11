<?php
    function greet($who) 
    {
        echo "Hello {$who} and Welcome!" ;
    }

    function is_even($number) 
    {
        return $number % 2;
    }

    greet("cavemoss");
    is_even(11);
?>