<?php
function gras($str)
{
    $tabArrayMot = explode(" ", $str);
    foreach ($tabArrayMot as $key => $value) {
        if (ctype_upper($value[0])) {
            echo "<b>$value</b> ";
        } else {
            echo $value . ' ';
        }
    }
}
function cesar($str, $decalage = +2)
{
    $alphabet = array_merge(range('A', 'Z'));
    $split = str_split($str);
    foreach ($split as $key => $value) {
        if ($str[0]) {
            # code...
        }
    }
}

if (!empty($_GET['str']) && !empty($_GET['fonction'])) {

    if ($_GET['fonction'] === "gras") {
        echo gras($_GET['str']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job07</title>
</head>

<body>
    <form method="GET">
        <input type="text" name="str">
        <select name="fonction">
            <option value="gras" name="gras">Gras</option>
            <option value="cesar">Code Cesar</option>
            <option value="plateforme">mettre des _ quand le mots fini par 'me'</option>
        </select>
        <button type="submit">Soumettre</button>
    </form>
</body>

</html>