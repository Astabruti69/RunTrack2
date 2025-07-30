<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
<label>
        Nom <br/>
        <input type="text" name="name"><br/>
</label>        
        <input type="submit" value="envoyer">
    </form>
    <?php
    var_dump($_GET);
    if (isset($_GET["name"])) {
        echo "Le nombre d'argument GET envoyer est : ". $_GET['name'];
    }
    ?>
</body>
</html>