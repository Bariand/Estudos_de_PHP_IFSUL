<?php
    include_once("conectar.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pesquisa Usuário SistemaFic</title>
    <style></style>
</head>
<body>
    <!-- Criação da tabela e o cabeçalho dos dados -->
    <table border="1" style="width: 50%">
        <tr>
            <th>NOME</th>
            <th>ENDEREÇO</th>
            <th>CIDADE</th>
        </tr>

    <?php
        $sql = "SELECT * FROM usuario";
        $resultado = mysqli_query($strcon, $sql);

        while ($registro = mysqli_fetch_array($resultado)) {
            $nome = $registro['nome'];
            $endereco = $registro['endereco'];
            $cidade = $registro['cidade'];

            echo "<tr>";
            echo "<td>".$nome."</td>";
            echo "<td>".$endereco."</td>";
            echo "<td>".$cidade."</td>";
            echo "</tr>";
        }
        
        echo "</table>";

        mysqli_close($strcon);
    ?>

    <form name="exclui" action="exclui.php" method="post">
        <p>Digite o nome que deseja excluir:<input type="text" name="nome" /></p>
        <input type="submit" name="botao" value="Enviar" />
    </form>
</body>
</html>