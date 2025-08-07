<!-- Créez une variable de session nommée “nbvisites”. 
A chaque fois que la page est visitée, ajoutez 1. 
Afficher le contenu de cette variable.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->

<?php
session_start();
//pour commencer la session

$_SESSION['nbvisites'] = $_SESSION['nbvisites'] ?? 0;
//si $_session['nbvisites'] existe et nest pas null,alors sa valeur est utiliser
//sinon la valeur 0 est utiliser

if (isset($_POST['reset'])) {
    $_SESSION['nbvisites'] = 0;
} else {
    $_SESSION['nbvisites']++;
    //si on appuye le bouton tu dois reset sinn tu fais ++ le nombre de visites
}
echo "le nombre de visite sur la page est de : " . $_SESSION['nbvisites'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jour08Job01</title>
</head>

<body>
    <form method="post">
        <button type="submit" name="reset">Reset</button>
    </form>
</body>

</html>