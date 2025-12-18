<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idEdit = $_GET['id'] ?? null;

if (!is_numeric($idEdit)) {
    dd("Cet employé n'existe pas.");
};

$employe = getEmploye($pdo, $idEdit);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['envoyer'])) {
    // ===============================================
    // Traitement du formulaire de modification d'un employé
    // ===============================================

    $nom = nettoyer($_POST['nom']);
    $prenom = nettoyer($_POST['prenom']);
    $sexe = nettoyer($_POST['sexe']);
    $service = nettoyer($_POST['service']);
    $salaire = nettoyer($_POST['salaire']);

    $testUpate = modifierEmploye($pdo, $nom, $prenom, $sexe, $service, $salaire, $idEdit);
    // dg($testUpate);
    redirect('/employes/list-employe.php');
}


include PATH_PROJET . '/views/employes/edit-employe-view.php';
// dg($employe);
?>