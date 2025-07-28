<?php


for ($i=1; $i <1000 ; $i++) { 
    $compteur =0;
    for ($s=1; $s <1000 ; $s++) { 
        if ($i % $s == 0) {
            $compteur ++;
        }
        } if ($compteur == 2) {
            echo "<mark>$i est un nombre premiers </mark>";
        } if ($compteur > 2) {
            echo "$i nombre ordinaires";
        } if ($compteur == 1) {
            echo "$i nombre ordinaires";
        }   
    echo "<br/>";
}
?>