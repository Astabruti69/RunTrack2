<!-- En utilisant php et mysqli, connectez-vous à la base de données “jour09”. A l’aide d’une
requête SQL, récupérez l’ensemble des informations de la table etudiants. Affichez le
résultat de cette requête dans un tableau html. La première ligne de votre tableau html
(thead) doit contenir le nom des champs. Les suivantes (tbody) doivent contenir les
données présentes dans votre base de données. -->

<!-- 
------REQUETE SQL POUR RECUPERER TOUT LES DONNEES DE BDD------ 
SELECT *
FROM etudiants 
-->

<!-- 
-----------SYNTAXE POUR CONNECTER UN FICHER PHP AVEC LA BDD------------- 
// $servername = 'localhost';
// $username = 'root';
// $password = '';
// $dbname = 'jour09';
// $conn = new mysqli($servername, $username, $password, $dbname);

// je peut faire sa ou directement le mettre sur new mysqli en bas
 -->
<?php
//on établit la connexion
$conn = new mysqli('localhost:3307', 'root', '', 'jour09');

//on vérifie la connexion
if ($conn->connect_error) {
    die('Erreur : ' . $conn->connect_error);
}
echo 'connexion réussie';

?>