-- Ecrivez dans le fichier “job15.sql” une requête permettant de récupérer le nom des
-- salles et le nom de leur étage.

SELECT salles.nom AS nom_salle, etage.nom AS nom_etage
FROM salles
JOIN etage ON salles.id_etage = etage.id;

-- salles.nom AS nom_salle → je prends le nom de la salle et je lui donne un alias pour qu’il soit plus clair.
-- etage.nom AS nom_etage → pareil pour l’étage.
-- JOIN etage ON salles.id_etage = etage.id → je relie la table salles à la table etage en disant que la colonne id_etage de salles correspond à la colonne id de etage.
-- 👉 Résultat : une liste où chaque ligne contient le nom d’une salle + le nom de l’étage associé.