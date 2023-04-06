<?php
    include_once("conectar.php");

    $pesquisa = $_GET['cidade'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Pesquisa por Cidade</title>
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
        $sql = "SELECT * FROM usuario WHERE cidade = '$pesquisa'";
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
</body>
</html>