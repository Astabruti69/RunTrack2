<?php

$str = "Certaines choses changent, et d'autres ne changeront jamais.";
// calcule la longuer de phrase 
$longueur = strlen($str);

$resultat = "";
// on enleve le premier lettre de la phrase 
for ($i = 0; $i < $longueur - 1; $i++) {
// on ajoute le premier lettre a la fin de la phrase
    $resultat .= $str[$i + 1];
}
// le resultat egal a tout ce quon a fais avant
$resultat .= $str[0];
// donc on affiche le resultat
echo $resultat;

?>