<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, sélectionnez la capacité moyenne des salles. Affichez le résultat de cette requête
dans un tableau html. La première ligne de votre tableau html doit contenir le nom des
champs. Les suivantes doivent contenir les données présentes dans votre base de
données. -->
<?php
require_once('connection_bdd.php');
// on met AS pour quil affiche sa comme nom en bdd et on peut 
// aussi ustiliser ce qui est marquer apres AS dans echo pour le afficher dans le php. 
$requete = "SELECT AVG(capacite) AS capacite_moyenne
            FROM salles";
$result = $conn->query($requete);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job11Jour10</title>
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
                <th>Capacité Moyenne</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['capacite_moyenne'] . "</td>";
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