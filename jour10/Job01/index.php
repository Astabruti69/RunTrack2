<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données. -->
<?php
//pour utiliser les variables de la page connection_bdd.php
require_once('connection_bdd.php');

//la requete sql je le stock dans un variable 
$requete = "SELECT * FROM etudiants";

//on stocke le resultat de la requete dans une variable
//et dis dans le resultat tu fais la connection dans la base de données
//et tu execute ce requete la donc dans le resultat ta tout les données que
//tu voulais avec la requete sql.
$result = $conn->query($requete);// syntaxe mysqli

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job01Jour10</title>
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
                <th>ID</th>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
                <th>Sexe</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Explication :
// $result->fetch_assoc() récupère chaque ligne sous forme de tableau associatif (clé => valeur).
// num_rows (qu'on voit dans l'objet) montre qu’il y a 7 lignes à parcourir.
// Vérifie s'il y a des résultats
            if ($result->num_rows > 0) {
                // Boucle sur chaque ligne
                //on met le resultat dans une variable qui sappele $row
                //avec la function fetch_assoc qui nous permet de afficher les données
                //de la bdd "chaine de carac" en tableau. 
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['prenom'] . "</td>";
                    echo "<td>" . $row['nom'] . "</td>";
                    echo "<td>" . $row['naissance'] . "</td>";
                    echo "<td>" . $row['sexe'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
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