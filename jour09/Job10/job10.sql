-- Ecrivez dans le fichier “job10.sql” une requête permettant de calculer la superficie de
-- l’ensemble des étages.
SELECT SUM(superficie) AS superficie_total
FROM etage;
-- as superficie_total pour donner un nom apres le calcul