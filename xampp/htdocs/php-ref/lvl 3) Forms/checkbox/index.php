<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Coffee"> Coffee <br>
        <input type="checkbox" name="foods[]" value="Cheetos"> Cheetos <br>
        <input type="checkbox" name="foods[]" value="Chicken"> Chicken <br>
        <input type="submit" name="confirm" value="Confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])) {
        echo "You've ordered: <br>";
        foreach($_POST["foods"] as $post) {
            echo $post . "<br>" ;
        }
    }
?>