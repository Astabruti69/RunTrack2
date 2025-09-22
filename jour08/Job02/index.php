<!-- Créez un cookie nommé “nbvisites”. A chaque fois que la page est visitée, ajoutez 1.
Afficher le contenu du cookie.
Ajoutez un bouton nommé “reset” qui permet de réinitialiser ce compteur. -->
<?php
$nbvisits = 0;

if (isset($_COOKIE['nbvisites'])) { //si il existe le nbvisites
    $nbvisits = $_COOKIE['nbvisites'];//alors on met le cookie dans une variable $nbvisits
    $nbvisits++; //et le cookie dois faire ++ (incrementation)
    setcookie("nbvisites", $nbvisits); //on modifie le donnee de client et on met le value de $nbvisits
} else //si il existe pas
    setcookie("nbvisites", 0, time() + 3600);
//on cree un cookie avec la valeur initiale et dans certains temps 
//sa se detruit (les donnees)
if (isset($_POST['reset'])) {
    $nbvisits = 0; //remettre la $variable a 0
    setcookie("nbvisites", $nbvisits); //et on modifie les donnee a 0 grace a la variable $nbvisits = 0 
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
echo "la page a été visite " . $nbvisits . " fois";
?>
<form action="index.php" method="post">
    <button type="submit" name="reset">Reset</button>
</form>