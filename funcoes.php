<!Doctype html>
<html>
    <head></head>
    <body>
        <?php
            function exibir_mensagem($nome){
                echo "Olá\n";
                echo $nome;
            }

            exibir_mensagem("Lucas");
            echo "<br>";

            //acha o dia da semana pela data do computador
            function dia_atual() {
                $hoje = getdate();
                switch($hoje["wday"]){
                    case 0: 
                        return "Domingo";
                        break;
                    case 1:
                        return "Segunda";
                        break;
                    case 2:
                        return "Terça";
                        break;
                    case 3:
                        return "Quarta";
                        break;
                    case 4:
                        return "Quinta";
                        break;
                    case 5:
                        return "Sexta";
                        break;
                    case 6:
                        return "Sabado";
                        break;
                }
            }

            $dia = dia_atual();
            echo $dia;
        ?>
    </body>
</html>