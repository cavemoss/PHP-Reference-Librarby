<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="radio" name="credit_card" value="visa"> Visa <br>
        <input type="radio" name="credit_card" value="mastercard"> Mastercard <br>
        <input type="radio" name="credit_card" value="american_express"> American Express <br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>

<?php
    if(isset($_POST["confirm"])) 
    {
        if(empty($_POST["credit_card"])) echo "Please select a payment method" ;

        else 
        {
            switch($_POST["credit_card"]) 
            {
                case "visa":
                    echo "You selected Visa";
                    break;
                case "visa":
                    echo "You selected Mastercard";
                    break;
                case "visa":
                    echo "You selected American Express";
                    break;
            }
        }
    }
?>