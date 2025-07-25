<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name = "Nom">
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_POST["Nom"]) > 0) {
        echo $_POST["Nom"];
    }
    ?>
</body>
</html>