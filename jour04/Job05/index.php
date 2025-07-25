<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="username">
        <input type="text" name="password">
        <input type="submit" value="Submit">
    </form>
    <?php
    

    if (!empty($_POST["username"]) && !empty($_POST["password"]))  {
        $username = "John";
        $password = "Rambo";

    if ($_POST["username"] === $username && $_POST["password"] === $password) {
        echo "C'est pas ma guerre";
    }         
    else {
        echo "Votre pire cauchemar.";
    }
    }
    
    ?>
</body>
</html>