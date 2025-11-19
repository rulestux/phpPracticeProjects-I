<?php

    // iniciando a sessão:
    session_start();

    $_SESSION['name'] = "Fel";

    // para problemas mais simples, usam-se 'cookies', os quais se iniciam
    //  com a seguinte sintaxe, que inclui o tempo de expiração como último
    //  parâmetro:
    setcookie("name", "Tux", time()+3600);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF=8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
</head>
<body>

<h1>Hello, Cookie & Session!</h1>

</body>
</html>
