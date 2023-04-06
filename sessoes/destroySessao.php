<?php
    
    //inicia ou recupera sessão
    session_start();

    //apaga todas as variáveis da seção pela criação de um array novo
    $_SESSION = array();

    //destroy a sessão, mas não apaga variáveis globais nem cookies,
    //por isso o uso da lógica acima
    session_destroy();
?>