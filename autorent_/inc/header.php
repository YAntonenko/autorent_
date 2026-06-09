<?php if (session_status() == PHP_SESSION_NONE) { session_start(); } ?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Autorent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand fw-bold" href="index.php">Autorent</a>
        <div class="navbar-nav me-auto">
            <a class="nav-link" href="index.php">Avaleht</a>
            <a class="nav-link" href="autod.php">Autod</a>
            <a class="nav-link" href="hinnad.php">Hinnad</a>
            <a class="nav-link" href="kontakt.php">Kontakt</a>
            <a class="nav-link" href="admin/login.php">Admin</a>
        </div>
        <form class="d-flex" action="autod.php" method="get">
            <input class="form-control me-2" type="text" name="q" placeholder="Otsi autot">
            <button class="btn btn-outline-light" type="submit">Otsi</button>
        </form>
    </div>
</nav>
