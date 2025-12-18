<?php
$titleEntreprise = 'Modifier un employé';
require PATH_PROJET . '/views/partials/header.php';
?>
        <h1>Modifier un employé</h1>
        <form action="?id=<?= $employe['id_employes']; ?>" method="post">

            <div>
                <label for="nom">Nom</label>
                <input type="text" name="nom" value="<?= $employe['nom']; ?>">
            </div>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" value="<?= $employe['prenom']; ?>">
            </div>

            <div>
                <label for="sexe">Sexe</label>
                <select name="sexe" id="sexe">
                    <option value="" disabled selected>-- Choisissez un sexe --</option>
                    <option value="m" <?= $employe['sexe'] === 'm' ? 'selected' : ''; ?>>Masculin</option>
                    <option value="f" <?= $employe['sexe'] === 'f' ? 'selected' : ''; ?>>Féminin</option>
                </select>
            </div>

            <div>
                <label for="service">Service</label>
                <input type="text" name="service" value="<?= $employe['service']; ?>">
            </div>

            <div>
                <label for="salaire">Salaire</label>
                <input type="text" name="salaire" value="<?= $employe['salaire']; ?>">
            </div>

            <button type="submit" name="envoyer">Modifier</button>
            <button type="reset" name="annuler">Annuler</button>
        </form>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>