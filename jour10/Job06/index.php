<!-- En utilisant php, connectez-vous à la base de données “jour09”. A l’aide d’une requête
SQL, récupérez le nombre total d’étudiants dans une colonne nommée “nb_etudiants”.
Affichez le résultat de cette requête dans un tableau html. La première ligne de votre
tableau html doit contenir le nom du champ. -->
<?php
require_once('connection_bdd.php');

$requete = "SELECT COUNT(id) FROM etudiants";
$result = $conn->query($requete);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job06Jour10</title>
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
                <th>Nombre D'etudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['COUNT(id)'] . "</td>";
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