<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="nombre">
        <input type="submit" value="OK">
    </form>
    <?php
    if (!empty($_GET['nombre'])) {
        if ($_GET['nombre'] %  2 == 0) {
            echo $_GET['nombre'] . " est un nombre pair";
        } else {
            echo $_GET['nombre'] . " est un nombre impair";
        }
    }
    ?>
</body>
</html>