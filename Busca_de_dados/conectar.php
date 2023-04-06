<?php
    $servername = "localhost";
    $database = "SistemaFic";
    $username = "root";
    $password = "";

    //cria a conexão
    $strcon = mysqli_connect($servername, $username, $password, $database);

    //verifica a conexão
    if(!$strcon) {
        die("Falha na conexão: " .mysqli_connect_error());
    }

    echo "Conexão realizada";
?>