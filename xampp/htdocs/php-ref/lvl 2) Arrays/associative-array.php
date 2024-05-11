<?php

    $capitals = array(
        "USA" => "Washington D.C.",
        "Japan" => "Tokio",
        "Canada" => "Toronto",
        "France" => "Paris"
    );

    $capitals["Canada"] = "Las Vegas";
    $capitals["China"] = "Beijing";

    foreach($capitals as $key => $value) 
    {
        echo "Capital of $key is $value <br>";
    }

    $keys = array_keys($capitals);
    $values = array_values($capitals);

    foreach ($keys as $key) 
    {
        echo $key . $capitals[$key] . "<br>" ;
    }

    $capitals = array_flip($capitals);
    
?>