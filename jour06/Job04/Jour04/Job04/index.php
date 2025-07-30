<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <input type="text" name="prenom">
        <input type="text" name="nom">
        <input type="submit" value="OK">
    </form>
    <table border ="1">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
            <tbody>
                <tr>
                    <td>prenom</td>
                    <td>
                        <?php
                        if (isset($_POST['prenom'])) {
                            echo $_POST['prenom'];
                        }
                        ?>
                    </td>
                </tr>
                    <tr>
                        <td>Nom</td>
                        <td>
                            <?php
                            if (isset($_POST['nom'])) {
                                echo $_POST['nom'];
                            }
                            ?>
                        </td>
                    </tr>
            </tbody>
    </table>
</body>
</html>