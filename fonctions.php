<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("PATH_PROJET", $_SERVER['DOCUMENT_ROOT'] . "/entreprise");
define("WEB_ROOT", "/entreprise");

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

// ================================================================
// CRUD de employes
// ================================================================