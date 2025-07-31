<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $count = 0;
    foreach ($_GET as $key => $value) {
        $count++;
    }
    ?>
    <form method="GET">
<label>Nom <br/></label>
        <input type="text" name="name"><br/>
<label>Prenom<br/></label>
        <input type="text" name="prenom"><br/>
<label>Ville<br/></label>
        <input type="text" name="ville"><br/>
        <input type="submit" value="envoyer">
    </form>
    <?php
    echo "Le nombre d’argument GET envoyé est : " . $count;
    ?>

</body>
</html>