<?php
for ($i = 0; $i <= 1000; $i++) {
    $compteur = 0;
    for ($x = 1 ; $x <= 1000; $x++) {
        if ($i % $x == 0){
            $compteur ++;
        }
        } if ($compteur == 2) {
            echo "<mark>$i nombre premier</mark>";
        } if ($compteur > 2) {
            echo "$i nombre ordinaire";
        } if ($compteur == 1) {
            echo "$i nombre ordinaire";
        }
        echo "<br />";
    }
?> 