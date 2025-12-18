# Dashboard Taxi

## Principe

- Création d'une base de données Mysql avec utilisation phpmyadmin, de gestion des employés d'une entreprise.
- Une table nommée "employes".
- Mise en place du PDO pour connecter la base de données avec le projet PHP.
- Création d'un dashboard avec indiqué dessus quelques statistiques des employés de l'entreprise.
- Ajout de fonctions pour supprimer/ajouter/modifier des données de la base de données.
- Views de la liste des employés, de la page d'ajout et de modification des employés.


## Arborescence de la structure du projet

```
│   connexiondb.php
│   createDatabase.php
│   entreprise.sql
│   fonctions.php
│   index.php
│   README.md
│   
├───assets
│   ├───css
│   │       style.css
│   │       
│   └───img
│           favicon.jpg
│           logo.jpg
│
├───employes
│       add-employe.php
│       del-employe.php
│       edit-employe.php
│       list-employe.php
│       
└───views
    ├───employes
    │       add-employe-view.php
    │       edit-employe-view.php
    │       list-employe-view.php
    │       
    └───partials
            footer.php
            header.php
            nav.php

```


## Exemple de contenu de la table "employes" (les données indiquées sont fictives. Toute ressemblance avec l'identité d'une personne est fortuite)

| **id_employes** | **prenom**  | **nom**  | **sexe** | **service**   | **date_embauche** | **salaire** |
|-----------------|-------------|----------|----------|---------------|-------------------|-------------|
| 350             | Jean-pierre | Laborde  | m        | direction     | 1999-12-09        | 5000        |
| 388             | Clement     | Gallet   | m        | commercial    | 2000-01-15        | 2300        |
| 415             | Thomas      | Winter   | m        | commercial    | 2000-05-03        | 3550        |
| 417             | Chloe       | Dubar    | f        | production    | 2001-09-05        | 1900        |
| 491             | Elodie      | Fellier  | f        | secretariat   | 2002-02-22        | 1600        |
| 509             | Fabrice     | Grand    | m        | comptabilite  | 2003-02-20        | 1900        |
| 547             | Melanie     | Collier  | f        | commercial    | 2004-09-08        | 3100        |
| 592             | Laura       | Blanchet | f        | direction     | 2005-06-09        | 4500        |
| 627             | Guillaume   | Miller   | m        | commercial    | 2006-07-02        | 1900        |
| 655             | Celine      | Perrin   | f        | commercial    | 2006-09-10        | 2700        |
| 699             | Julien      | Cottet   | m        | secretariat   | 2007-01-18        | 1390        |
| 701             | Mathieu     | Vignal   | m        | informatique  | 2008-12-03        | 2000        |
| 739             | Thierry     | Desprez  | m        | secretariat   | 2009-11-17        | 1500        |
| 780             | Amandine    | Thoyer   | f        | communication | 2010-01-23        | 1500        |
| 802             | Damien      | Durand   | m        | informatique  | 2010-07-05        | 2250        |
| 854             | Daniel      | Chevel   | m        | informatique  | 2011-09-28        | 1700        |
| 876             | Nathalie    | Martin   | f        | juridique     | 2012-01-12        | 3200        |
| 900             | Benoit      | Lagarde  | m        | production    | 2013-01-03        | 2550        |
| 933             | Emilie      | Sennard  | f        | commercial    | 2014-09-11        | 1800        |
| 990             | Stephanie   | Lafaye   | f        | assistant     | 2015-06-02        | 1775        |
