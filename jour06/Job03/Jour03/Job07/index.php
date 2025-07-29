<?php
$str ="Certaines choses changent, et d'autres ne changeront jamais.";
$longeur =strlen($str);
$result ="";
var_dump([$longeur, $str]);
for ($i=0; $i < $longeur-1 ; $i++) { 
    $result.=$str[$i+1];
}
$result.=$str[0];
echo ucfirst(strtolower($result));
?>