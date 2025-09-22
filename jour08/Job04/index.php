<!-- Créez un formulaire de connexion qui contient un input de type de text nommé
“prenom” et un bouton Si un utilisateur a déjà entré son prénom, n'affichez
plus le formulaire de connexion. A la place, écrivez “Bonjour prenom !” et ajouter un
bouton “Déconnexion” nommé “deco”. Lorsque l’utilisateur se déconnecte, il faut à
nouveau afficher le formulaire de connexionsubmit nommé “connexion”. Lorsque l’on valide le formulaire, le
prénom est ajouté dans un cookie. -->
<?php

session_start(); //on démarre la session
// Une session en PHP est une façon de garder en mémoire des infos (comme le prénom de l’utilisateur) pendant qu’il navigue.
// session_start() doit toujours être au tout début de ton fichier (avant le HTML), sinon ça ne marchera pas.


$cookie_time = time() + 3600; //Durée de vie du cookie (1 heure)
// time() = l’heure actuelle en secondes.
// time() + 3600 = heure actuelle + 3600 secondes → donc 1 heure plus tard.
// Cela veut dire que le cookie va rester valide pendant 1 heure.



// ---------Déconnexion-------------
if (isset($_POST['deco'])) {
    // isset($_POST['deco']) → ça veut dire : si le bouton Déconnexion a été cliqué.

    // Supprimer cookie
    setcookie("prenom", "", time() - 3600);
    // setcookie("prenom", "", time() - 3600) → on recrée le cookie mais en le faisant expirer dans le passé → donc il est supprimé.

    unset($_COOKIE['prenom']);
    // unset($_COOKIE['prenom']) → on enlève la variable côté PHP.

    // Supprimer session
    unset($_SESSION['prenom']);
    // unset($_SESSION['prenom']) → on enlève la variable de session.
}
// 👉 Résultat : l’utilisateur est déconnecté, donc la prochaine fois, on lui montre le formulaire.




// ---------Connexion-------------
if (isset($_POST['connexion']) && !empty($_POST['prenom'])) {
    // isset($_POST['connexion']) → si le bouton Connexion a été cliqué.
    // !empty($_POST['prenom']) → vérifier que l’utilisateur a bien écrit quelque chose.
    $prenom = htmlspecialchars($_POST['prenom']); //sécurité
    // htmlspecialchars() → évite que l’utilisateur écrive du code HTML (exemple <script>) qui casserait ta page.


    //Stocker dans cookie
    setcookie("prenom", $prenom, $cookie_time);
    // setcookie("prenom", $prenom, $cookie_time) → crée un cookie qui s’appelle prenom et contient la valeur écrite.
    $_COOKIE['prenom'] = $prenom;
    // $_SESSION['prenom'] = $prenom; → stocke aussi le prénom dans la session.

    //Stocker dans session
    $_SESSION['prenom'] = $prenom;
}
// 👉 Résultat : l’utilisateur est connecté, son prénom est retenu par le cookie et la session.



// ---------------Détermination du prenom a afficher-------------
$prenom = null;
// On crée une variable $prenom qui est vide par défaut.
// Ça permet de dire :
// Si on trouve un prénom dans la session, on l’utilise.
if (isset($_SESSION['prenom'])) {
    // si tu es connecté → $prenom contient ton prénom,
    $prenom = $_SESSION['prenom'];
    // Sinon, on regarde dans le cookie.
} elseif (isset($_COOKIE['prenom'])) {
    // si tu n’es pas connecté → $prenom reste null.
    $prenom = $_COOKIE['prenom'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08Job04</title>
</head>

<body>
    <!-- Ici on fait un choix avec if :

Si $prenom contient quelque chose (donc l’utilisateur est connecté) →
→ on affiche Bonjour prénom ! et un bouton Déconnexion.

Sinon (l’utilisateur n’est pas connecté) →
→ on affiche un formulaire avec une zone pour écrire le prénom et un bouton Connexion. -->
    <?php if ($prenom): ?>
        <p>Bonjour <?= $prenom; ?> !</p>
        <form method="post">
            <button type="submit" name="deco">Déconnexion</button>
        </form>
    <?Php else: ?>
        <form method="post">
            <input type="text" name="prenom" placeholder="Entrez votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>
    <?php endif; ?>
</body>

</html>

<!-- Fonctionnement :
-Connexion :
Quand tu entres ton prénom → il est enregistré dans un cookie et dans la session.

-Affichage :
Si une session ou un cookie existe → afficher « Bonjour prénom ! » + bouton Déconnexion.
Sinon → afficher le formulaire de connexion.

-Déconnexion :
Supprime cookie + session → formulaire réapparaît. -->



<!-- 🚀 Résumé du fonctionnement :

Quand tu arrives sur la page :
si tu as déjà un cookie/session → tu vois Bonjour prénom !
sinon tu vois le formulaire.
Si tu tapes ton prénom → il est enregistré dans un cookie + session.
Si tu cliques sur Déconnexion → cookie + session sont supprimés → tu retournes au formulaire. -->