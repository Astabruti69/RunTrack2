<?php
function leetSpeak($str){
    $leet = "";  // Variable pour stocker le résultat

    for ($i = 0; $i < strlen($str); $i++) {
        // On convertit chaque caractère en majuscule pour simplifier les comparaisons
        switch (strtoupper($str[$i])) {
            case 'A': 
            $leet .= '4'; 
            break;
            //on met .= pour ajouter des chaines sur chaines et avoir le resultat.
            case 'B': 
            $leet .= '8'; 
            break;
            case 'E': 
            $leet .= '3'; 
            break;
            case 'G': 
            $leet .= '6'; 
            break;
            case 'L': 
            $leet .= '1'; 
            break;
            case 'S': 
            $leet .= '5'; 
            break;
            case 'T': 
            $leet .= '7'; 
            break;
            default: $leet .= $str[$i]; // Sinon, on garde le caractère tel quel
        }
    }

    return $leet;
}

echo leetSpeak("Sangeet");
?>