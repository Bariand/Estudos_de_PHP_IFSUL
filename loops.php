<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $x = 1;
            while($x <= 100) {
                echo "O número é: $x<br>";
                $x++;
            }

            $x = 1;
            do {
                echo "O número é: $x<br>";
                $x++;
            } while ($x <= 100);

            for ($i = 0; $i < 10; $i++) {
                echo "A variável vale $i <br>";
            }

            $vetor = array (1, 2, 3, 4);

            foreach ($vetor as $v) {
                echo "O valor corrente do vetor é $v <br>";
            }
        ?>
    </body>
</html>