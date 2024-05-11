<?php 

$username = "Cavemoss";
$username_arr = array("Cave", "The", "Moss");
$phone = "123-456-7890";

strtolower($username); // converts all characters to lowercase
strtoupper($username); // converts all characters to uppercase
trim($username); // removes whitespace from the beginning and end of a string
str_pad($username, 20, "0"); // pads a string with a specified character to a certain length
str_replace("-", " ", $phone); // replaces occurrences of a search string with a replacement string
strrev($username); // reverses the order of characters in a string
str_shuffle($username); // randomly shuffles the order of characters in a string
strcmp($username, "CaveMoss"); // compares two strings and returns 0 if they are equal
strlen($username); // returns the length of a string
strpos($phone, "-"); // finds the first occurrence of a substring within a string
substr($username, 0, 3); // extracts a portion of a string
explode(" ", $username); // splits a string into an array of strings by a delimiter
implode("", $username_arr); // implodes the array into a string, joining the elements together without a delimiter
 
?>