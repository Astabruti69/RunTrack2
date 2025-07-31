<?php
// Vérifie si un style est sélectionné via POST
$style = isset($_POST['style']) ? $_POST['style'] : 'style1';

// Sécurise le nom du fichier pour éviter des inclusions indésirables
$styles_disponibles = ['style1', 'style2', 'style3'];
if (!in_array($style, $styles_disponibles)) {
    $style = 'style1';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- Inclusion du style sélectionné -->
    <link rel="stylesheet" href="<?php echo htmlspecialchars($style); ?>.css">
</head>
<body>
    <form method="post">
        <label for="color-select">choose a style :</label>
        <select name="style">
            <option value="style1"<?php if ($style == 'style1') echo 'selected'; ?>>style1</option>
            <option value="style2"<?php if ($style == 'style2') echo 'selected'; ?>>style2</option>
            <option value="style3"<?php if ($style == 'style3') echo 'selected'; ?>>style3</option>
        </select>
        <input type="submit" value="valider">
    </form>
        <h1>Voici la difference de style de police</h1>
</body>
</html>