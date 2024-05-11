<?php

    class User {

        public $username;   // can be accessed and modified $obj->username, all properties and methods are public by default
        private $email;     // can only be accessed and modified internally %this->email, require getter and setter functions

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
    }

    $user = new User();

    $user->username = "cavemoss" ;
    echo $user->username . "<br>" ;

    $user->set_email("alexshu1812@gmail.com");
    echo $user->get_email();

?>