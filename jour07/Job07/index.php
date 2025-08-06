<?php
function gras($str)
{
    $tabArrayMot = explode(" ", $str);

    //on separe les mots differents dans le $str si cest une phrase et on cree un tableaux

    foreach ($tabArrayMot as $key => $value) { //on prends les mots dans ce tableau 
        if (ctype_upper($value[0])) {   //on verifie si (ctype_upper [la chaines est en majuscule] de $value = $mots $value[0]=premiere lettre de mots ex : $i=0)
            echo "<b>$value</b> ";  // et si cest un majuscule alors on affiche le $value = mot en majuscule
        } else {                    //sinon
            echo $value;         //on affiche le $value = mot sans modification
        }
    }
}

function cesar($str, $decalage = 2)
{
    $alphabet = array_merge(range('a', 'z'));
    $str = strtolower($str);
    $result = "";
    for ($i = 0; $i < strlen($str); $i++) {
        $index = array_search($str[$i], $alphabet);

        //On cherche à quelle position dans l’alphabet se trouve la lettre actuelle.
        //Par exemple, si $str[$i] est 'c', $index vaudra 2.

        if ($index + $decalage < 26) {
            $result .= $alphabet[$index + $decalage];
        } else {
            $result .= $alphabet[($index + $decalage) % 26];
        }

        //On vérifie si le décalage ne dépasse pas la fin de l'alphabet (qui a 26 lettres).
        //Si le nouvel index est encore dans l’alphabet (< 26), on prend simplement la lettre décalée.
        //Sinon, on utilise le modulo % 26 pour revenir au début de l’alphabet (comme un cercle).
        //Exemple : 'z' décalé de 1 donne 'a'.

    }
    return ucfirst($result); //on retorune la reponse avec un (ucfirst)Majuscule la permiere lettre

}

function plateforme($str)
{
    $result = "";
    $lettreMe = "me";
    $lenver = strrev($str);
    if ($lenver[0] == "e" && $lenver[1] == "m") {
        echo "_" . $str;
    } else {
        echo $str;
    }
}


if (!empty($_GET['str']) && !empty($_GET['fonction'])) {

    if ($_GET['fonction'] === "gras") {
        echo gras($_GET['str']);
    } elseif ($_GET['fonction'] === "cesar") {
        echo cesar($_GET['str']);
    } elseif ($_GET['fonction'] === "plateforme") {
        echo plateforme($_GET['str']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="str">
        <select name="fonction">
            <option value="gras">Gras</option>
            <option value="cesar">Code Cesar</option>
            <option value="plateforme">mettre des _ quand le mots fini par 'me'</option>
        </select>
        <button type="submit">Soumettre</button>
    </form>
</body>

</html>