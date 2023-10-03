<?php

    session_start();
    //destroi a sessão
    session_destroy();
    // redireciona o usuario para a pagina de login
    header('location: ./');

?>