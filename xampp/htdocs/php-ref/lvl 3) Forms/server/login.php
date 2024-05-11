<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="text" name="username"> Username <br>
        <input type="submit" name="login" value="Login">
    </form>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST") echo "This is POST <br>" ;
    foreach($_SERVER as $key => $value) echo "$key = $value <br>" ;
?>