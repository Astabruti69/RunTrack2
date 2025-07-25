<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
<label>
        Nom <br/>
        <input type="text" name="name"><br/>
</label>        
        <input type="submit" value="envoyer">
    </form>
    <?php
    var_dump($_GET);
    if (isset($_GET) > 0 ) {
        echo $_GET["name"];
    }

    ?>
</body>
</html>