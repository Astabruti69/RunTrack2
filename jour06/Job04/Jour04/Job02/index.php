<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        table {
            text-align: center;
            margin:20px;
        }
        table td {
            padding:10px;
        }
    </style>
    <table border="1">
        <thead>
            <tr>
                <th>Argument</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Prenom</td>
                <td>
                    <?php 
                    if (isset($_GET['prenom'])) {
                        echo $_GET['prenom'];
                    }
                    ?>
                </td>
            </tr>
                <tr>
                    <td>Nom</td>
                    <td>
                        <?php
                        if (isset($_GET['nom'])) {
                            echo $_GET['nom'];
                        }
                        ?>
                    </td>
                </tr>
        </tbody>
    </table>
    <form method="get">
        <input type="text" name="prenom">
        <input type="text"name="nom">
        <input type="submit" value="OK">
    </form>
</body>
</html>