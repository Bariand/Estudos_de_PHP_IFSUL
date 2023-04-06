<?php

    //exclusão deve ser feita por chave primária, mas neste exemplo usamos
    //diretamente o nome (o que poderia exlcuir todos os registros com o
    //mesmo nome).
    include_once("conectar.php");
    $nome = $_POST['nome'];

    $sql = "DELETE FROM usuario WHERE nome = '$nome'";

    $resultado = mysqli_query($strcon, $sql);

    //fecha conexão
    mysqli_close($strcon);
    echo "<br>";
    echo "Exclusão realizada com sucesso";
?>