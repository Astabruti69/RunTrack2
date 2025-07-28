<?php
$str = "Tous ces instants 
        seront perdus dans le temps 
        comme les larmes sous la pluie";
$result = "";

for ($i = 0; $i < strlen($str); $i+=2) {
    $result = $str[$i];
    echo $result;
}
?>
<!-- $a += 5; // 
 affecte la valeur 8 à la variable $a correspond à l'instruction 
 '$a = $a + 5'; -->