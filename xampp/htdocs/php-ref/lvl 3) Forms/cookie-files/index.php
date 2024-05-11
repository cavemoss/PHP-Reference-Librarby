<?php

    function create_cookie($name, $data, $days_to_live) 
    {
        setcookie($name, $data, time() + 8640 * $days_to_live, "/");
    }

    function delete_cookie($name) 
    {
        if (isset($_COOKIE[$name])) 
        {
            unset($_COOKIE[$name]); 
            setcookie($name, "", -1, "/"); 
        }
    }

    create_cookie("fav_drink", "coffee", 1);
    create_cookie("fav_snack", "cheetos", 1);
    create_cookie("fav_food", "chicken", 1);

    foreach($_COOKIE as $key => $value) echo "$key = $value <br>" ;

?>