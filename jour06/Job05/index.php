<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <label for="Styles">Choisissez Votre Style Plz :</label>
        <select name="Styles">
            <option value="style1.css">Style1</option>
            <option value="style2.css">Style2</option>
            <option value="style3.css">Style3</option>
        </select>
            <input type="submit" value="Valider">
    </form>
    <h1>Voici le texte qui change selon le style</h1>
    <?php
    if (isset($_GET["Styles"])) {
    $var =$_GET["Styles"];
    $style1 ="style1.css";
    $style2 ="style2.css";
    $style3 ="style3.css";

    if ($var == $style1) {
        echo "<link rel='stylesheet' href='" . $style1 ."'>";
    } elseif ($var == $style2) {
        echo "<link rel='stylesheet' href='". $style2 ."'>";
    } elseif ($var == $style3) {
        echo "<link rel='stylesheet' href='". $style3 ."'>";
    }
    }
    ?>
</body>
</html>