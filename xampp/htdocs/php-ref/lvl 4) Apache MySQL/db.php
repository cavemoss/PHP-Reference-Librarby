<?php

    $host = "127.0.0.1:3307";
    $user = "root";
    $pwd = "";
    $db = "db";

    $connection = null;

    try {
        $connection = mysqli_connect($host, $user, $pwd, $db);
        echo "MySQL database connected" ;
    } catch(mysqli_sql_exception) {
        echo "MySQL database connection <b>failed</b>" ;
    }

?>