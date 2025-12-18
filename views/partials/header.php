<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="<?= WEB_ROOT ?>/assets/img/favicon.jpg">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
    <link rel="stylesheet" href="<?= WEB_ROOT ?>/assets/css/style.css">
    <title><?= $titleEntreprise ?></title>
    <link href="https://cdn.jsdelivr.net/gh/tofsjonas/sortable@latest/sortable-base.min.css" rel="stylesheet" />
</head>

<body>
    <header>
        <?php require PATH_PROJET . '/views/partials/nav.php'; ?>
    </header>
    <hr>
    <main class="container">