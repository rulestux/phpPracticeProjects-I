<?php

    session_start();

    // exibindo conteúdos:
    print_r($_SESSION['name']);
    print_r($_COOKIE['name']);

?>
