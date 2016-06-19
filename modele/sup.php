<?php



try {
    $recettesupprimee = $connexion->exec("DELETE FROM recette_recette WHERE id= $sup;");
    header("Location: ?modifsup");
}catch (Exception $e) {
    echo "Erreur :".$e->getMessage();
    die();
}