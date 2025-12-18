<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$employesArray = listerEmployes($pdo);


include PATH_PROJET . '/views/employes/list-employe-view.php';
// dg($_SERVER['DOCUMENT_ROOT']); //Pour voir le chemin de la racine du projet

?>