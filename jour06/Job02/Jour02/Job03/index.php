<?php
for ($i=0; $i <=100 ; $i++) { 
    if ($i == 42) {
        echo "LaPlateforme_";
    } elseif ($i >= 0 && $i <= 20) {
        echo "<i>$i</i>";
    } elseif ($i >= 25 && $i <= 50) {
        echo "<u>$i</u>";
    } else {
        echo $i;
    }
    echo "<br/>";
}
?>