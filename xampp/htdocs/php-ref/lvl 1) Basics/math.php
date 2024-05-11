<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">

        <label>x: </label>
        <input type="text" name="x"><br>

        <label>y: </label>
        <input type="text" name="y"><br>

        <label>z: </label>
        <input type="text" name="z"><br>

        <button type="submit" value="total"></button>
    </form>
</body>
</html>

<?php

$x = $_GET["x"];
$y = $_GET["y"];
$z = $_GET["z"];
$total = null;

$total = abs($x); // absolute value
$total = round($x); // round
$total = floor($x); // round down
$total = ceil($x); // round up
$total = ceil($x); // round up
$total = pow($x, $y); // power
$total = sqrt($x); // power
$total = max($x, $y, $z); // find max
$total = min($x, $y, $z); // find min
$total = pi(); // return pi
$total = rand(1, 100); // random between 1 and 100

echo $x;

?>