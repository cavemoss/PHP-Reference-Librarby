<?php 
    include("db.php");

    $sql = "

        CREATE TABLE IF NOT EXISTS db.users (
            id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
            username VARCHAR(255) NOT NULL UNIQUE, 
            password VARCHAR(255) NOT NULL, 
            reg_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP
        );

    "; mysqli_query($connection, $sql);

    function create_random_user($connection) {
        $username = "user" . rand();
        $password = rand();
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        try {
            $sql = "
    
                INSERT INTO db.users (username, password) VALUES
                ('$username', '$password_hash');
                
            "; mysqli_query($connection, $sql);
            echo "<br>User has been created!<br><b>username</b>: $username<br><b>password</b>: $password" ;
        } catch (mysqli_sql_exception) {
            create_random_user($connection);
        }
    } 
    
    create_random_user($connection)
?>
