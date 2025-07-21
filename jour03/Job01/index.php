<?php 
$array1 = [200,204,173,98,171,404,459,];
    
for ($i = 0; $i < count($array1); $i++) { 
    if ($array1[$i] % 2 == 0 ) {
        echo $array1[$i] . " est un nombre paire <br />";
    }else {
            echo $array1[$i] . " est un nombre impaire <br />";
        }
}
?>