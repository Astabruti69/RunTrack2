<!DOCTYPE html>
<html>
<head>
    <title>Triangle PHP</title>
    <style>
        pre {
            font-family: monospace;
        }
    </style>
</head>
<body>
<pre>
<?php
$hauteur = 5;

for ($i = 0; $i < $hauteur; $i++) {
    // Espaces avant
    echo str_repeat(" ", $hauteur - $i - 1);

    // Première ligne (sommet)
    if ($i == 0) {
        echo "/\\";
    }
    // Dernière ligne (base)
    elseif ($i == $hauteur - 1) {
        echo "/";
        echo str_repeat("_", 2 * $i);
        echo "\\";
    }
    // Lignes intermédiaires
    else {
        echo "/";
        echo str_repeat(" ", 2 * $i);
        echo "\\";
    }

    echo "\n";
}
?>
</pre>
</body>
</html>

