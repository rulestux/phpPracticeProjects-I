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
    <!-- STYLES -->
    <!-- chamada padrão do arquivo CSS: -->
    <!-- <link rel="stylesheet" href="styles.css"> -->
    <!-- chamada de arquivo CSS com PHP, utilizando o HELPER 'url.php': -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/styles.css">
    <!-- GOOGLE FONT Montserrat -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');
    </style>
</head>
<body>
<header>
    Template Header
</header>
