<?php
include dirname(__DIR__) . '/fonctions.php'; //Le dirname permet de récupérer le chemin du dossier parent et d'éviter des erreurs de "./" ou "../", etc
require dirname(__DIR__) . '/connexiondb.php';

$idSuppEmploye = $_GET['id'] ?? null;

if (!is_numeric($idSuppEmploye)) {
    dd("Cet employé n'existe pas.");
};

$pdo = new PDO($dsn, $user, $pass, $options);
$stm = $pdo->prepare("DELETE FROM employes WHERE id_employes = :id");
$stm->bindParam(':id', $idSuppEmploye, PDO::PARAM_INT);
$suppResult = $stm->execute();

if ($suppResult === true) {
    redirect('/employes/list-employe.php');
}

// dd($suppResult);

?>