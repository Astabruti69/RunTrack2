-- Ecrivez dans le fichier “job06.sql” une requête permettant de sélectionner l’ensemble
-- des informations des étudiants dont prenom commence par un “T”.
SELECT *
FROM etudiants
WHERE prenom like 'T%';

-- LIKE est un opérateur SQL utilisé pour faire des recherches par motif (pattern matching).
-- Le symbole % est un caractère générique (wildcard) qui signifie "n’importe quelle suite de caractères" (y compris aucun caractère).
-- Donc, 'T%' veut dire : tous les prénoms qui commencent par la lettre T, suivie de zéro ou plusieurs caractères.