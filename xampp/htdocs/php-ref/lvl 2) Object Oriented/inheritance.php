<?php

    class User {

        function get_email() 
        {
            return $this->email;
        }

        function set_email($email)
        {
            if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $this->email = $email;
            }
        }

        function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
            echo "New user added<br>" ;
        }
    }

    class Admin extends User {

        function __construct($username, $email, $level)
        {
            parent::__construct($username, $email); // invoke parents' constructor function
            $this->level = $level;
        }
    }

    $admin = new Admin("cavemoss", "alexshu1812@gmail.com", 1);

    foreach(get_object_vars($admin) as $key=>$value) {
        echo "<b>$key</b>=>$value<br>";
    }

?>