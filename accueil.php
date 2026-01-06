<?php
$titleEntreprise = 'Dashboard';
include 'fonctions.php';
require 'connexiondb.php';

include PATH_PROJET . '/views/partials/header.php';
?>

<div id="title">
    <h1 style="text-align: center;">Dashboard</h1>
</div>

<div id="stat">
    <p>Nombre d'employés : <?= getNbLigneTable($pdo, 'employes') ?></p>
    <p>Nombre d'hommes : <?= getNbEmployesParSexe($pdo, 'm') ?></p>
    <p>Nombre de femmes : <?= getNbEmployesParSexe($pdo, 'f') ?></p>
    <p>Nombre d'employés par service : </p>
    <ul>
        <?php
        foreach (getNbEmployesParService($pdo) as $service) {
            echo '<li>' . $service['service'] . ' : ' . $service['nb'] . '</li>';
        }
        ?>
    </ul>

</div>

<?php
include PATH_PROJET . '/views/partials/footer.php';
?>