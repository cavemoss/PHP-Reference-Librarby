<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="index.php" method="post">

        <label for="username">username:</label>
        <input type="text" name="username">

        <br><br>

        <label for="pwd">password:</label>
        <input type="password" name="pwd">

        <br><br>

        <button type="submit">Login</button>
    </form>
    
</body>
</html>

<?php
    echo $_POST["username"] . "<br>";
    echo $_POST["pwd"] . "<br>";
?>
