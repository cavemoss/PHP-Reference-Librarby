<?php

    $foods = array("coffee", "cheetos", "chicken");

    // set an element of an array
    $foods[0] = "apple" ;

    // loop through an array
    foreach($foods as $food)  echo $food . "<br>" ;
    print_r($foods);

    // common array functions
    array_push($foods, "coffee", "orange");
    array_pop($foods);
    array_shift($foods);
    echo array_reverse($foods);
    echo count($foods)

?>