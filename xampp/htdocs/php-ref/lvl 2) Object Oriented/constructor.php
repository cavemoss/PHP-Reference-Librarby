<?php

    class User {

        function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
            echo "New user added<br>" ;
        }
    }

    $user = new User('cavemoss', "alexshu1812@gmail.com");

    echo "$user->username&emsp;$user->email" ;

?>