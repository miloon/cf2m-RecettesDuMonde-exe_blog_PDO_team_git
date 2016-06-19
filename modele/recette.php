<?php

$requete = $connexion->prepare("SELECT r.titre, r.ladesc AS recette, r.ladate, u.id AS idlogin, u.login, u.ladesc, p.id AS idpays, p.lintitule
  FROM recette_recette r
  INNER JOIN recette_pays p
  ON r.pays_id = p.id
INNER JOIN recette_util u
ON r.util_id = u.id
WHERE r.id = $recette;");

// exécution de la requête
$requete->execute();

// ICI CODER LE MESSAGE EN CAS D'ERREUR
$affiche_recette = $requete->fetch(PDO::FETCH_ASSOC);
$titre = $affiche_recette['titre'];
?>


