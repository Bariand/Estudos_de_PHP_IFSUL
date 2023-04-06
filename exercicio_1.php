<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $prova1 = 6;
            $prova2 = 8;
            $media = ($prova1 + $prova2) / 2;

            if($media < 3){
                echo "você precisa estudar mais!";
            }
            elseif($media < 6){
                echo "faltou pouquinho!";
            }
            elseif($media < 9){
                echo "muito bom!";
            }
            else{
                echo "Parabéns! Você gabaritou!";
            }
        ?>
    </body>
</html>