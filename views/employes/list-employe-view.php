<?php
$titleEmployes = 'Liste des employés';
require PATH_PROJET . '/views/partials/header.php';

if (count($employesArray) === 0) :
    echo '<h3>Aucun employé enregistré !</h3>';
    echo '<a href="' . WEB_ROOT . '/employes/add-employe.php"><button class="outline primary">Ajouter un chauffeur</button></a>';
    die();
endif;
?>
<h1 style="text-align: center;">Liste des employés</h1>
<table>
    <thead>
        <tr>
            <th>
                Nom
            </th>
            <th>
                Prénom
            </th>
            <th>
                Sexe
            </th>
            <th>
                Service
            </th>
            <th>
                Date d'embauche
            </th>
            <th>
                Salaire
            </th>
            <th>
                Actions
            </th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($employesArray as $employe) : ?>
            <tr>
                <td>
                    <?= $employe['nom'] ?>
                </td>
                <td>
                    <?= $employe['prenom'] ?>
                </td>
                <td>
                    <?= $employe['sexe'] ?>
                </td>
                <td>
                    <?= $employe['service'] ?>
                </td>
                <td>
                    <?= $employe['date_embauche'] ?>
                </td>
                <td>
                    <?= $employe['salaire'] ?>
                </td>
                <td>
                    <a href="<?= WEB_ROOT . '/employes/edit-employe.php?id=' . $employe['id_employes'] ?>"><button class="outline primary">Modifier</button></a>
                    <a href="<?= WEB_ROOT . '/employes/del-employe.php?id=' . $employe['id_employes'] ?>" onclick="return confirm('Voulez-vous vraiment supprimer cet employé ?')"><button class="outline secondary">Supprimer</button></a>
                </td>

            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<div id="addButton">
    <a href="<?= WEB_ROOT . '/employes/add-employe.php' ?>"><button class="outline primary">Ajouter un employé</button></a>
</div>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>