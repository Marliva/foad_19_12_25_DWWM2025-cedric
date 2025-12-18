<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire d'ajout d'un employé
    // ===============================================

    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);
    $sexe = nettoyer($_POST['sexe']);
    $service = nettoyer($_POST['service']);
    $dateEmbauche = !empty($_POST['dateEmbauche']) ? $_POST['dateEmbauche'] : null;
    $salaire = nettoyer($_POST['salaire']);

    ajoutEmploye($pdo, $nom, $prenom, $sexe, $service, $dateEmbauche, $salaire);

    $employeInserted = getLastInsertId($pdo);

    if ($employeInserted) {
        redirect('/employes/list-employe.php');
    }
    exit;
}

include PATH_PROJET . '/views/employes/add-employe-view.php';
