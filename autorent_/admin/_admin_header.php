<?php
session_start();
if (!isset($_SESSION['is_admin'])) {
    header('Location: login.php');
    exit;
}
include '../inc/db.php';
?>
<!doctype html>
<html lang="et">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">Admin</a>
        <div class="navbar-nav">
            <a class="nav-link" href="index.php">Autod</a>
            <a class="nav-link" href="add_car.php">Lisa auto</a>
            <a class="nav-link" href="reservations.php">Broneeringud</a>
            <a class="nav-link" href="logout.php">Logi välja</a>
        </div>
    </div>
</nav>
