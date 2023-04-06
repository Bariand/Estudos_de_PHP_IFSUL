<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $opcao = "s";
            switch ($opcao) {
            case "s":
                echo "Você escolheu SIM!";
                break;
            case "n":
                echo "Você escolheu NÃO!";
                break;
            default:
                echo "Opção inválida!";
                break;
            }
        ?>
    </body>
</html>