<?php
$titleEntreprise = 'Ajouter un employé';
require PATH_PROJET . '/views/partials/header.php';
?>
        <h1>Ajouter un employé</h1>
        <form action="" method="post">

            <div>
                <label for="nom">nom</label>
                <input type="text" name="nom" id="nom">
            </div>

            <div>
                <label for="prenom">Prénom</label>
                <input type="text" name="prenom" id="prenom">
            </div>

            <div>
                <label for="sexe">Sexe</label>
                <select name="sexe" id="sexe">
                    <option value="" disabled selected>-- Choisissez un sexe --</option>
                    <option value="m">Masculin</option>
                    <option value="f">Féminin</option>
                </select>
            </div>

            <div>
                <label for="service">Service</label>
                <input type="text" name="service" id="service">
            </div>

            <div>
                <label for="dateEmbauche">Date d'embauche</label>
                <input type="date" name="dateEmbauche" id="dateEmbauche">
            </div>

            <div>
                <label for="salaire">Salaire</label>
                <input type="number" name="salaire" id="salaire">
            </div>

            <button type="submit" name="envoyer">Ajouter</button>
        </form>
<?php
include PATH_PROJET . '/views/partials/footer.php';
?>