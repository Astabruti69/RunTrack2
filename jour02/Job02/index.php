<?php
$a =[26, 37, 88, 1111, 3233];

function is_in_tab ($tab, $nbr) {
    $i=0;
    foreach($tab as $forbidden) {
        if ($nbr == $forbidden) {
            return true;
        }
    }
    return false; 
}

for ($i=0; $i<=1337; $i++) {
    if (is_in_tab($a, $i) === false)
        echo "$i <br />";
    }
?>