<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $cores = array("amarelo", "verde", "azul");
            $cores[] = "branco";

            echo $cores[0]."-".$cores[1]."-".$cores[2]."-".$cores[3]."<br>";
            print_r($cores);
        ?>
    </body>
</html>