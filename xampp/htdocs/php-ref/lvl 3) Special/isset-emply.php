<?php
    $username = "cavemoss";

    if(isset($username)/*True if the variable is declared and not null*/) {
        echo "This variable is set";
    } else {
        echo "This variable is NOT set";
    }

    if(empty($username)/*True if the variable is not declared, null or false*/) {
        echo "This variable is empty";
    } else {
        echo "This variable is NOT empty";
    }
?>