<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form method="GET" action="index.php">
        <input type="text" name="Hauteur" placeholder="Hauteur"><br><br>
        <input type="text" name="Largeur" placeholder="Largeur"><br><br>
        <input type="submit" value="VALIDER">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
$hauteur =$_GET["Hauteur"];
$largeur =$_GET["Largeur"];
// Triangle
for ($y = 1 ; $y <= $hauteur ; $y++) {
        for($x= 1; $x <= $hauteur - $y; $x ++) {
                echo "&nbsp&nbsp";
        }

        for ($x=1; $x <= ($y * 2 - 1) ; $x++) { 
                if ($x ==1) {
                        echo "/";
                }
                if ($x == 2 * $y - 1) {
                        echo "\\";
                }
                else {
                        echo "_";
                }
        }
        echo "<br>";
}
}

// Rectangle
if ($_SERVER["REQUEST_METHOD"] == "GET") {
 for ($y= 1; $y <= $hauteur ; $y++) { 
    for ($x=1; $x <= $largeur ; $x++) { 
        if ($x == 1 || $x == $largeur) {
            echo"|";
        } elseif ($y == $hauteur) {
            echo"_";
        } else {
            echo "&nbsp&nbsp";
        }
    }
    echo "<br/>";
 }
 }
?>

</body>

</html>