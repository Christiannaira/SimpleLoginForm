<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        $username = "Chris";
        $password = "Chris1234";

        if ($_POST["user_name"] === $username && $_POST["password"] === $password) {
            echo "You are successfully logged in!";
        } else {
            echo "hello world";
        }

    

    ?>

</body>
</html>