<?php

// criando variável para receber os dados do método (verbo) HTTP GET, acessíveis
// e expostos como argumentos na 'query string', i. e., a URL; tais dados são
// mantidos na variável de ambiente '$_GET', como array associativo:
    $name = $_GET['name'];
    $age = $_GET['age'];

?>

    <h1>Your name is <?= $name ?>, and you are <?= $age ?> years old.</h1>
