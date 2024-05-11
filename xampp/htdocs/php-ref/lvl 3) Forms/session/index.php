<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username" required> 

        <br><br>

        <label for="password">Password</label>
        <input type="password" name="password" required> 

        <br><br>

        <input type="submit" name="submit" value="Login">
    </form>
    <a href="home.php">home</a>
</body>
</html>

<?php
    if(isset($_POST["submit"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["username"];
        header("home.php");
    }
?>
