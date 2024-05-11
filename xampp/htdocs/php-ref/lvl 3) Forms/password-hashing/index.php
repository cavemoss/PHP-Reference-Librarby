<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        Password
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
    $password = "pizza123";
    $hashed_pwd = password_hash($password, PASSWORD_DEFAULT);

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(!password_verify($_POST["password"], $hashed_pwd)) {
            echo "Incorrect Password!";
        } else {
            echo "Correct!";
        }
    }
?>