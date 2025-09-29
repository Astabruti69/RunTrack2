<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez l’ensemble des informations des salles en les triant par capacité
décroissante. Affichez le résultat de cette requête dans un tableau html. La première
ligne de votre tableau html doit contenir le nom des champs. Les suivantes doivent
contenir les données présentes dans votre base de données. -->
<?php
require_once('connection_bdd.php');
$requete = 'SELECT *
            FROM salles
            ORDER BY capacite DESC';
$result = $conn->query($requete);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job09Jour10</title>
    <style>
        tr th {
            padding: 20px;
        }

        tr td {
            padding: 20px;
        }
    </style>
</head>

<body>
    <table border="1">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Id Etage</th>
                <th>Capacité</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['id_etage'] . "</td>";
                    echo "<td>" . $row['capacite'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "Aucun résultat.";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
</body>

</html>