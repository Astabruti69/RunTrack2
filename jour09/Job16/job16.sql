-- Ecrivez dans le fichier “job16.sql” une requête permettant de récupérer le nom de
-- l'étage ayant la salle avec la plus grande capacité (et afficher aussi le nom de cette salle
-- ainsi que sa capacité).
-- Dans ce résultat, la colonne “nom” de la salle doit être renommée en “Biggest Room”
SELECT MAX(capacite), salles.nom AS 'Biggest Room' , etage.nom
FROM salles
JOIN etage ON salles.id_etage = salles.id;
-- MAX(capacite) pour savoir la plus grande capacite