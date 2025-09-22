<!-- Créez un formulaire qui contient un input de type de text nommé “prenom” et un bouton submit.
Lorsque l’on valide le formulaire, le prénom est ajouté dans une variable de session. 
Afficher l’ensemble des prénoms.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser la liste. -->
<?php
// On démarre la session pour pouvoir utiliser $_SESSION
session_start();

// Si la variable de session 'prenom' n'existe pas encore, 
// on la crée comme un tableau vide ($_SESSION['prenom'] = [];)
if (!isset($_SESSION['prenom'])) {
    $_SESSION['prenom'] = [];
}

// Si un prénom est envoyé via le formulaire (champ 'prenom')
if (isset($_POST['prenom'])) {
    // On ajoute ce prénom au tableau de la session
    $_SESSION['prenom'][] = $_POST['prenom'];
}

// Variante plus courte pour réinitialiser la liste si le bouton reset est cliqué
// isset($_POST['reset']) retourne true si le bouton reset a été cliqué
// Dans ce cas, on réinitialise le tableau des prénoms à vide
isset($_POST['reset']) && $_SESSION['prenom'] = [];

// Affiche le contenu de la variable de session pour debug
var_dump($_SESSION['prenom']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08Job03</title>
</head>

<body>

    <!-- Formulaire pour ajouter un prénom -->
    <form method="post">
        <input type="text" name="prenom">
        <button type="submit" name="submit">Soumettre</button>
    </form>

    <!-- Affichage de la liste des prénoms stockés en session -->
    <ul>
        <?php foreach ($_SESSION['prenom'] as $key): ?>
            <li><?= $key ?></li>
        <?php endforeach; ?>
    </ul>

    <!-- Formulaire pour réinitialiser la liste -->
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>

</body>

</html>