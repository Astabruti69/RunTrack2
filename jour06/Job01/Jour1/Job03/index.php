<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $myBool =True;
    $string = "Affichage de Valeur";
    $integer =9;
    $double=9.99;
?>
    <table border="1">
        <thead>
            <tr>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo gettype($myBool);?></td>
                <td>True = 1 ou False = Rien</td>
                <td><?php echo $myBool;?></td>
            </tr>
            <tr>
                <td><?php echo gettype($string);?></td>
                <td> Chaines de caractere</td>
                <td><?php echo $string;?></td>
            </tr>
            <tr>
                <td><?php echo gettype($integer);?></td>
                <td>Les Chiffres ou Nombres sans point ou virgules (Nombres Flottant)</td>
                <td><?php echo $integer;?></td>
            </tr>
            <tr>
                <td><?php echo gettype($double);?></td>
                <td>Les Chiffres Avec les point ou virgules</td>
                <td><?php echo $double;?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>