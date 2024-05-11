<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <?php
        if(isset($_SESSION["username"])) {
            echo "Welcome home <b>{$_SESSION["username"]}</b> ! <br>";
        } else {
            echo "Who are you? Please login <br>";
        }
    ?>

    <form action="home.php" method="get">
        <input type="submit" name="logout" value="logout">
    </form>

    <a href="index.php">login</a>

    <script>
        let sessionExists = <?php 
            if(isset($_SESSION["username"])) echo "true";
            else echo "false";
        ?>;

        if(!sessionExists) {
            document.querySelector('input[type="submit').style.display = "none"
        }
    </script>
</body>
</html>

<?php
    if(isset($_GET["logout"]))
    {
        session_destroy();
        header("index.php");
    }
?>