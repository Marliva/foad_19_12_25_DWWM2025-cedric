<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/foad_19_12_25_DWWM2025-cedric");
define("WEB_ROOT", "/foad_19_12_25_DWWM2025-cedric");

function dg($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
}

function dd($data)
{
    echo '<pre style="background-color:black; color:white;padding: 1rem;">';
    var_dump($data);
    echo '</pre>';
    die();
}

function createDatabase($pdo,$sqlfile)
{
    $query = file_get_contents($sqlfile);
    $pdo->exec($query);
}

function redirect($url)
{
    header('Location: ' . WEB_ROOT . $url);
    exit;
}

function getLastInsertId($pdo)
{
    $sql = "SELECT LAST_INSERT_ID()";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $last_insert_id = $stmt->fetch();

    return $last_insert_id;
}

function nettoyer($dataParam)
{
    $data = trim($dataParam);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

function getNbLigneTable($pdo, $table)
{
    $sql = "SELECT COUNT(*) FROM `" . $table . "`";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $count = $stmt->fetchColumn();
    return $count;
}

function getNbEmployesParSexe($pdo, $sexe)
{
    $sql = "SELECT COUNT(*) FROM employes WHERE sexe = :sexe";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':sexe' => $sexe
    ]);
    return $stmt->fetchColumn();
}

function getNbEmployesParService($pdo)
{
    $sql = "SELECT service, COUNT(*) AS nb FROM employes GROUP BY service";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

// ================================================================
// CRUD de employes
// ================================================================

function listerEmployes($pdo)
{
    $sql = "SELECT * FROM employes ORDER BY id_employes ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $employes = $stmt->fetchAll();
    return $employes;
}

function getEmploye($pdo, $idParam)
{
    $sql = "SELECT * FROM employes WHERE id_employes = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        'id' => $idParam
    ]);
    $driver = $stmt->fetch();
    return $driver;
}

function ajoutEmploye($pdo, $nomParam, $prenomParam, $sexeParam, $serviceParam, $dateEmbaucheParam, $salaireParam)
{
    $sql = "INSERT INTO employes (nom, prenom, sexe, service, date_embauche, salaire) VALUES (:nom, :prenom, :sexe, :service, :date_embauche, :salaire)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([
        ':nom'    => $nomParam,
        ':prenom' => $prenomParam,
        ':sexe'   => $sexeParam,
        ':service' => $serviceParam,
        ':date_embauche' => $dateEmbaucheParam,
        ':salaire' => $salaireParam
    ]);
}

function modifierEmploye($pdo, $nomParam, $prenomParam, $sexeParam, $serviceParam, $salaireParam, $idParam)
{
    $sql = "UPDATE employes SET nom = :nom, prenom = :prenom, sexe = :sexe, service = :service, salaire = :salaire WHERE id_employes = :id";
    $stmt = $pdo->prepare($sql);
    $test = $stmt->execute([
        ':id'      => $idParam,
        ':nom'     => $nomParam,
        ':prenom'  => $prenomParam,
        ':sexe'    => $sexeParam,
        ':service' => $serviceParam,
        ':salaire' => $salaireParam
    ]);

    return $test;
}
