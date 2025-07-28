<?php
$numb=5;
$etoile=0;

for ($i=0; $i<$numb; $i++) { 
    for ($s=0; $s <=$numb-$i-1; $s++) { 
        echo "&nbsp;&nbsp;";
    }
    while ($etoile!=(2*$i+1)) {
        echo "*";
        $etoile ++;
    }
    $etoile = 0;
    echo "<br/>";
}
?>