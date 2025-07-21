<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $type = true;
    $nom = "toto";
    $valeur = 0.5;
    $val = 3;

    ?>
    <header>
        <table class="tab1" border="1" cellpadding="20" cellspacing="20">
            <tr>
                <th>Type de variable</th>
                <th>Nom de variable</th>
                <th>Valeur</th>
            </tr>
    </header>
    <tr>
        <td><?php echo gettype($valeur) ?></td>
        <td>1rst</td>
        <td><?php echo ($valeur) ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($type) ?></td>
        <td>2nd</td>
        <td><?php echo ($type) ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($nom) ?></td>
        <td>3rd</td>
        <td><?php echo ($nom) ?></td>
    </tr>
    <tr>
        <td><?php echo gettype($val) ?></td>
        <td>4th</td>
        <td><?php echo ($val) ?></td>
    </tr>
    </table>
</body>

</html>