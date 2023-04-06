<?php
    $nome_cookie = "usuario";
    $valor_cookie = "LucasCordeiro";
    setcookie($nome_cookie, $valor_cookie, time() + 3600);
?>

<!DOCTYPE html>
<html>
<head></head>
<body>
    <?php
        //"isset" verifica se a variável existe e retorna V ou F
        if(!isset($_COOKIE[$nome_cookie])) {
            echo "Cookie '" . $nome_cookie ."' não estava atribuído!";
        } else {
            echo "Cookie '" . $nome_cookie . "' está atribuído!<br>";
            echo "Valor: " . $_COOKIE[$nome_cookie];
        }
    ?>
</body>
</html>