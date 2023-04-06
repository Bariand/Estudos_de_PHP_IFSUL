<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $pessoa = array(
                "nome" => "Lucas",
                "idade" => "37",
                "e-mail" => "prefiro dizer não..."
            );

            echo $pessoa["nome"]."<br>";

            $matriz = array(
                        array(1, 5, 8),
                        array(2, 5, 6),
                        array(3, 4, 7)
                    );

            echo $matriz[0][0];
            echo $matriz[0][1];
            echo $matriz[0][2]."<br>";

            $arrayMulti = array(
                "arrayNumerico" => array(
                    "Item 1",
                    "Item 2",
                    "Item 3",
                ),
                "arrayAssociativo" => array(
                    "chave1" => "valor1",
                    "chave2" => "valor2",
                    "chave3" => "valor3",
                ),
            );
            print_r($arrayMulti);

            echo "<br>";
            
            echo $arrayMulti["arrayNumerico"][0]."<br>";
            echo $arrayMulti["arrayNumerico"][1]."<br>";
            echo $arrayMulti["arrayNumerico"][2]."<br>";
            echo $arrayMulti["arrayAssociativo"]["chave1"]."<br>";
            echo $arrayMulti["arrayAssociativo"]["chave2"]."<br>";
            echo $arrayMulti["arrayAssociativo"]["chave3"]."<br>";

            echo "<br>";

            $languages = array();
            $languages['PHP'] = array(
                "primeira_versão" => "1995",
                "ultima_versao" => "7.4.7",
                "desenvolvida_por" => "Rasmus Lerdorf",
                "descrição" => array(
                    "extensão" => ".php",
                    "licença" => "PHP license"
                )
            );
            $languages['Python'] = array(
                "primeira_versão" => "1991",
                "ultima_versao" => "3.8.0",
                "desenvolvida_por" => "Guido van Possum",
                "descrição" => array(
                    "extensão" => ".py",
                    "License" => "Python Software Foundation License"
                )
            );
            print_r($languages);
        ?>
    </body>
</html>