<?php
$hauteur = 20;
$largeur = 20;
echo "<pre>";

for ($y = 1; $y <= $hauteur; $y++){
    for ($x = 1; $x <= $largeur; $x++){
        if ($x == 1 || $x == $largeur) {
            echo "|";
        }
        elseif ($y == 1 || $y == $hauteur) {
            echo "-";
        }
        else {
            echo "&nbsp;";
        
        }

    }
    echo "<br />";
}
echo "</pre>";
?>