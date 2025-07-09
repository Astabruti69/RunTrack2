<?php
for ($i = 0; $i <= 100; $i++) {
    $output = $i;
// changement de numero 42 a La Plateforme_
    if ($i == 42) {
        $output = "La Plateforme_";
    }
//Appliquer les styles par paliers des nombres
    if ($i >=0 && $i <= 20) {
        $output = "<i>$output<i/>";
    }    
elseif ($i >= 25 && $i <= 50) {
        $output = "<u>$output</u>";
    }
    echo $output . "<br />";
}
?>