-- Ecrivez dans le fichier “job13.sql” une requête permettant de sélectionner la capacité
-- moyenne des salles.
SELECT AVG(capacite) AS capacite_moyenne
FROM salles;