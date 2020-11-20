<?php
require_once "model/articlesModel.php";

$allbiere = biereLoadAll($db);
$insertbiere =  insertBiere($db);

if(!$allbiere){
    $erreur = "Pas encore d'article";
}
if($insertbiere){
    $erreur = "l'article n'a pas été inséré";
}
//view
require_once "view/pages/Catalogue.php";
?>