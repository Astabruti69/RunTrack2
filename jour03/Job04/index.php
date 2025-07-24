<?php
$str = "Dans l'espace, personne ne vous entend crier.";
$count = 0;
$res = str_replace(' ', '', $str);

for ($i = 0; $i < strlen($res); $i++){
    $count = $count+1;
}
    echo 'Le nombre de caractere dans la phrase est :' . $count;
?>