<?php

// importando HELPER 'url.php':
include_once("helpers/url.php");
// importando DATA:
include_once("data/articles.php");
include_once("data/categories.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TuxRules Blog</title>
    <!-- STYLES -->
    <!-- chamada padrão do arquivo CSS: -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- chamada de arquivo CSS com PHP, utilizando o HELPER 'url.php': -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- FAVICON -->
    <link rel="shortcut icon" href="<?= $BASE_URL ?>/img/favicon.ico>" type="image/x-icon">
    <!-- GOOGLE FONT ROBOTO -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <!-- LOGO - configurado para ser link para home -->
        <a href="<?= $BASE_URL ?>" id="logo">
            <img src="<?= $BASE_URL ?>/img/logo.png" alt="TuxRules Blog">
        </a>
        <!-- NAVBAR -->
        <nav>
            <ul id="navbar">
            <li><a href="<?= $BASE_URL ?>" class="nav-link">Home</a></li>
            <li><a href="#" class="nav-link">Categories</a></li>
            <li><a href="#" class="nav-link">About</a></li>
            <li><a href="<?= $BASE_URL ?>contact.php" class="nav-link">Contact</a></li>
            </ul>
        </nav>
    </header>
