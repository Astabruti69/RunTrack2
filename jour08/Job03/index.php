<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton submit.
Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. 
Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->
<?php
session_start();




?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08Job03</title>
</head>

<body>
    <form method="post">
        <input type="text" name="prenom">
        <button type="submit" name="submit">Soumettre</button> <br>
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>