<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="nom">
        <input type="submit" value="OK">
    </form>
    <?php
    if (isset($_POST['nom'])) {
        echo "Le nombre d'argument POST envoyé est: " . $_POST['nom'];
    }
    ?>
</body>
</html>