<?php

$hauteur = 5;
// initialisation a 0 donc 5 ligne 
for ($i = 0; $i < $hauteur; $i++){
// espace à gauche pour centrer plus ça descend moins y a d'espaces
    for ($espace = 0; $espace < $hauteur - $i - 1; $espace++) {
// affiche espace pour centrer
         echo "&nbsp; "; 
        }
//etoiles
        for ($etoiles = 0; $etoiles < 2 * $i + 1; $etoiles++) {
             echo "*"; 
        }
//après une ligne retour a la ligne
        echo "<br>";


}