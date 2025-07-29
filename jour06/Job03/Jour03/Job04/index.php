<?php
$str ="Dans l'espace, personne ne vous entend crier";
$count =0;
$replace =str_replace (' ', '', $str);

for ($i=0; $i <strlen($replace); $i++) { 
    $count = $count+1;
}
echo 'le nombre de caracteres present 
        dans cette chaine est :'. $count ;
?>