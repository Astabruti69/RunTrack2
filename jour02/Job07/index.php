<?php
$hauteur = 5;
$largeur = 5;


for ($y = 1 ; $y <= $hauteur ; $y++) {
        for($x= 1; $x <= $hauteur - $y; $x ++) {
                echo "&nbsp&nbsp";
        }

        for ($x=1; $x <= ($y * 2 - 1) ; $x++) { 
                if ($x ==1) {
                        echo "/";
                }
                if ($x == 2 * $y - 1) {
                        echo "\\";
                }
                elseif ($y == $hauteur) {
                        echo "_";
                }
                else {
                        echo "&nbsp&nbsp";
                }
        }
        echo "<br>";
}

?>