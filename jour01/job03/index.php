<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Tableau Php</title>
</head>
<body>
<?php 

$type = True;
$nom = "Acharya";
$valeur = 0.1;


$val = 3 ;
?>
<table class="tab1" border="1" cellpadding="20" cellspacing="20">
    <tr>
      <th>Type</th>
      <th>Nom</th>
      <th>Valeur</th>
    </tr>
  
<tr>
      <td><?php echo gettype ($valeur) ?></td>
      <td>valeur</td>
      <td><?php echo $valeur ?></td>
    </tr>
    <tr>
      <td><?php echo gettype ($type) ?></td>
      <td>type</td>
      <td><?php echo $type ?></td>
    </tr>
    <tr>
      <td><?php echo gettype ($nom) ?></td>
      <td>nom</td>
      <td><?php echo $nom ?></td>
    </tr>
    </table>

</body>
</html>