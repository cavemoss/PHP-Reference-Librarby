<?php

    class User {

        public $role = "member";
        protected $email;   // a private property that can be accessed inside a child class

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

        function message() 
        {
            echo "$this->role user <b>$this->email</b> sent a message.<br>" ;
        }
    }

    class Admin extends User {

        public $role = "admin"; // overwrites parents' counterpart property

        function message()  // overwrites parents' counterpart method
        {
            echo "$this->role user <b>$this->email</b> sent a message.<br>" ;
        }

        function __construct($username, $email, $level)
        {
            parent::__construct($username, $email);
            $this->level = $level;
        }
    }

    $user = new User("meStrong", "me@strong.com");
    $admin = new Admin("cavemoss", "alexshu1812@gmail.com", 1);

    echo $user->role . "<br>" ;
    echo $admin->role . "<br>" ;

    $user->message();
    $admin->message();

?>
