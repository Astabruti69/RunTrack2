<?php
function occurrences($str, $char){
    $compteur=0;
    for ($i= 0; $i <=isset($str[$i]) ; $i++) { 
        if ($str[$i]==$char) {
            $compteur++;
        }
    }
    return $compteur;
}
echo occurrences("parametre", "a");
?>