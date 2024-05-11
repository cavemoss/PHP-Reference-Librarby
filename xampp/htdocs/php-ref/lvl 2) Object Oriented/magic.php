<?php

    class User {

        function __construct($username, $email)
        {
            $this->username = $username;
            $this->email = $email;
            echo "New user added: $this->username<br>" ;
        }

        function __toString() 
        {
            $string = "new ".get_class($this)." {<br>" ;
            foreach(get_object_vars($this) as $key=>$value) {
                $string .= "&emsp;<b>$key</b> : $value<br>";
            }
            $string .= " }<br>" ;
            return $string;
        }

        function __invoke() 
        {
            echo "User $this->username has been invoked<br>" ;
        }

        function __clone()
        {
            $this->username = "$this->username-clone" ;
            echo "User cloned: $this->username<br>" ;
        }

        function __destruct() 
        {
            echo "User $this->username has been removed<br>" ;
        }
    }

    $user = new User("cavemoss", "alexshu1812@gmail.com");

    $user_clone = clone $user;

    echo $user;

    echo $user_clone;

    $user();
    
    $user_clone();

?>