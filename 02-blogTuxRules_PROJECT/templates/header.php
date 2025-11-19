<?php

// importando HELPER 'url.php':
include_once("helpers/url.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TuxRules Blog</title>
    <!-- chamada padrão do arquivo CSS:
    <link rel="stylesheet" href="styles.css">
        chamada de arquivo CSS com PHP, utilizando HELPER 'url.php': -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- Google Font Montserrat -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    Template Header
</header>
