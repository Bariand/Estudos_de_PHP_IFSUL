<?php
    //colocando string de conexão em uma variável
    $conexao = mysqli_connect("localhost", "root", "", "sistemafic");

    //testa conexão. Se ausente, retorna um erro
    if(!$conexao){
        die("Erro de conexão com o banco de dados");
    }

    //recebe e aloca em variável os dados do front-end
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];

    //com o PHP, utiliza-se comando SQL para comandar a inserção 
    //dos dados em colunas de tabelas do DB
    $sql = "INSERT INTO usuario (nome, endereco, cidade)
            VALUES ('$nome', '$endereco', '$cidade')";

    //consulta o DB e insere de fato os dados no DB
    $resultado = mysqli_query($conexao,$sql);

    //fecha a conexão
    mysqli_close($conexao);
?>