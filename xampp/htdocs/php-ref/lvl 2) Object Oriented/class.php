<?php

    class User {

        public $username;
        public $email;

        function add_friend() {
            echo "$this->username is added as a friend!" ;
        }
    }

    foreach(get_class_vars("User") as $key=>$value) echo "$key=>$value<br>" ;
    foreach(get_class_methods("User") as $func) echo "$func()<br>" ;

    $user1 = new User();
    $user2 = new User();
    echo "this object is of class " . get_class($user1) . "<br>" ;

    $user1->username = "cavemoss" ;
    $user1->email = "alexshu1812@gmail.com" ;

    echo $user1->username . "<br>" ;
    echo $user1->email . "<br>" ;
    $user1->add_friend();

    $user2->username = "meStrong" ;
    $user2->email = "me@strong.com" ;

    echo $user2->username . "<br>" ;
    echo $user2->email . "<br>" ;
    $user2->add_friend();

?>