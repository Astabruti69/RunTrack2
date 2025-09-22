<!-- Développez le fameux jeu du morpion. 
Faites un tableau html avec 3 lignes et 3 colonnes représentant la grille. 
Au début de la partie, chacune des cases contient un bouton de type submit dont la valeur est “-”. 
Si un joueur clique sur ce bouton, le bouton est remplacé par un “O” ou par un “X”. 
C’est le joueur “X” qui commence.
Dès qu’un joueur a gagné, affichez “X a gagné” ou “O a gagné” et réinitialisez la partie. 
Si toutes les cases ont été cliquées et que personne n’a gagné, affichez “Match nul” et réinitialisez la partie. 
Un bouton “réinitialiser la partie” présent en dessous de la grille permet également de réinitialiser la partie à tout moment. -->

<?php
// PHP oublie tout ce qui se passe à chaque fois qu’une page est rechargée.
// session_start() permet de garder des informations entre chaque clic. Ici, on va stocker :
// La grille ($_SESSION['grille'])
// Le joueur qui doit jouer ($_SESSION['tour'])
// Le gagnant ($_SESSION['gagnant'])
session_start();

// Initialisation de la partie
if (!isset($_SESSION['grille']) || isset($_POST['reset'])) {
    // !isset($_SESSION['grille']) → Si la partie commence pour la première fois.
    // isset($_POST['reset']) → Si on clique sur le bouton “Réinitialiser la partie”.
    // La grille est un tableau 3x3 rempli de "-" pour dire “case vide”.
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    // Le tour commence toujours avec "X".
    $_SESSION['tour'] = 'X'; // X commence toujours
    // Gagnant est vide pour l’instant.
    $_SESSION['gagnant'] = null;

}


// Fonction pour vérifier si quelqu'un a gagné
function verifierGagnant($grille)
// On regarde toutes les lignes, toutes les colonnes et les deux diagonales.
// Si trois cases identiques et non vides sont alignées, on renvoie "X" ou "O".
// Sinon, on renvoie null (pas de gagnant pour l’instant).
{
    // Vérifier les lignes et colonnes
    for ($i = 0; $i < 3; $i++) {
        if ($grille[$i][0] !== '-' && $grille[$i][0] === $grille[$i][1] && $grille[$i][1] === $grille[$i][2]) {
            return $grille[$i][0];
        }
        if ($grille[0][$i] !== '-' && $grille[0][$i] === $grille[1][$i] && $grille[1][$i] === $grille[2][$i]) {
            return $grille[0][$i];
        }
    }
    // Vérifier les diagonales
    if ($grille[0][0] !== '-' && $grille[0][0] === $grille[1][1] && $grille[1][1] === $grille[2][2]) {
        return $grille[0][0];
    }
    if ($grille[0][2] !== '-' && $grille[0][2] === $grille[1][1] && $grille[1][1] === $grille[2][0]) {
        return $grille[0][2];
    }
    return null;
}

// Gestion d'un clic sur la grille
// isset($_POST['cell']) → Si on a cliqué sur une case.
if (isset($_POST['cell'])) {
    // explode('-', $_POST['cell']) → La valeur envoyée est "i-j", donc on sépare pour savoir quelle ligne et colonne.
    list($i, $j) = explode('-', $_POST['cell']);
    $i = (int) $i;
    $j = (int) $j;

    // Si la case est vide et qu'aucun gagnant n'a encore été déclaré
    // On vérifie que la case est vide ('-') et qu’il n’y a pas encore de gagnant.
    if ($_SESSION['grille'][$i][$j] === '-' && !$_SESSION['gagnant']) {
        // On met le symbole du joueur actuel (X ou O) dans la grille.
        $_SESSION['grille'][$i][$j] = $_SESSION['tour'];

        // Vérifier si le joueur a gagné
        // On vérifie ensuite si quelqu’un a gagné avec la fonction verifierGagnant.
        $gagnant = verifierGagnant($_SESSION['grille']);
        if ($gagnant) {
            $_SESSION['gagnant'] = $gagnant;
        } else {
            // Vérifier si match nul
            // Si toutes les cases sont remplies ($plein), on déclare match nul.
            $plein = true;
            foreach ($_SESSION['grille'] as $ligne) {
                if (in_array('-', $ligne)) {
                    $plein = false;
                    break;
                }
            }
            if ($plein) {
                $_SESSION['gagnant'] = 'Nul';
            }
        }

        // Changer de joueur si partie non terminée
        // Si la partie continue, on change de joueur.
        if (!$_SESSION['gagnant']) {
            $_SESSION['tour'] = $_SESSION['tour'] === 'X' ? 'O' : 'X';
        }
    }
}

// Si partie terminée, réinitialiser après affichage
// Bouton manuel : reset
// Bouton automatique après victoire ou match nul : auto_reset
if (isset($_POST['reset']) || isset($_POST['auto_reset'])) {
    $_SESSION['grille'] = [
        ['-', '-', '-'],
        ['-', '-', '-'],
        ['-', '-', '-']
    ];
    $_SESSION['tour'] = 'X';
    // La grille est remise à zéro et le tour revient à "X".
    $_SESSION['gagnant'] = null;
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Jeu du Morpion</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }

        td {
            border: 2px solid #000;
            width: 60px;
            height: 60px;
            text-align: center;
        }

        input[type=submit] {
            width: 100%;
            height: 100%;
            font-size: 24px;
        }

        .message {
            text-align: center;
            font-size: 20px;
            margin-top: 10px;
        }

        .reset-btn {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
        }
    </style>
</head>

<body>

    <h2 style="text-align:center;">Jeu du Morpion</h2>

    <form method="post">
        <table>
            <!-- On crée un tableau 3x3 avec des <tr> (lignes) et <td> (cases). -->
            <?php for ($i = 0; $i < 3; $i++): ?>
                <tr>
                    <?php for ($j = 0; $j < 3; $j++): ?>
                        <td>
                            <!-- Si la case est vide et que personne n’a gagné, on affiche un bouton cliquable. -->
                            <?php if ($_SESSION['grille'][$i][$j] === '-' && !$_SESSION['gagnant']): ?>
                                <button type="submit" name="cell" value="<?= $i ?>-<?= $j ?>">-</button>
                            <?php else: ?>
                                <!-- Sinon, on affiche simplement "X" ou "O". -->
                                <?= $_SESSION['grille'][$i][$j] ?>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>

        <input type="submit" name="reset" value="Réinitialiser la partie" class="reset-btn">
    </form>

    <div class="message">
        <?php
        // Si quelqu’un a gagné ou si c’est un match nul, on affiche le message.
        if ($_SESSION['gagnant'] === 'X') {
            echo "X a gagné !";
            // On propose un bouton “Rejouer” pour réinitialiser automatiquement la grille.
            echo '<form method="post"><input type="hidden" name="auto_reset"><input type="submit" value="Rejouer"></form>';
        } elseif ($_SESSION['gagnant'] === 'O') {
            echo "O a gagné !";
            echo '<form method="post"><input type="hidden" name="auto_reset"><input type="submit" value="Rejouer"></form>';
        } elseif ($_SESSION['gagnant'] === 'Nul') {
            echo "Match nul !";
            echo '<form method="post"><input type="hidden" name="auto_reset"><input type="submit" value="Rejouer"></form>';
        } else {
            // Sinon, on affiche le joueur dont c’est le tour.
            echo "Tour de " . $_SESSION['tour'];
        }
        ?>
    </div>
</body>
<!-- En résumé
On garde l’état du jeu avec la session.
On alterne entre X et O.
On vérifie les lignes, colonnes et diagonales pour trouver un gagnant.
On déclare match nul si toutes les cases sont pleines.
On réinitialise la grille soit manuellement, soit automatiquement après la fin de la partie. -->


<!-- [Grille affichée]
       |
       v
[Joueur clique une case]
       |
       v
[Case vide ?]
  |        |
  Non      Oui
  |         v
  |   [Met X ou O]
  |         |
  |         v
  |  [Vérifier gagnant]
  |         |
  |    ------------------
  |    |                |
  |   Oui              Non
  |    |                |
  | [Afficher "X/O a gagné"] 
  |                [Grille pleine ?]
  |                       |
  |                   ----+----
  |                   |        |
  |                  Oui       Non
  |                   |        |
  |         [Afficher "Match nul"] 
  |                          |
  +--------------------------+ -->


</html>