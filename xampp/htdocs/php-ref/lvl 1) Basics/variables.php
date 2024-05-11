<?php

$name = "CaveMoss";
$price = 42;
$cool = true;

echo $name . "<br>";
echo "Hello {$name}, you are worth \${$price}, {$cool}" . "<br>";


$food = "Pizza";
$quantity = 3;
$price = 3;
$total = null;

echo "You ordered {$quantity} of {$food} <br>";
$total = $quantity * $price;
echo "Your total is \${$total}";

?>