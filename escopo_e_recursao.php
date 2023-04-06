<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <?php
            $num = 8;
            $resto = "";
             function par_ou_impar($val){
                $resto = $val % 2;
                if($resto == 0)
                    return "PAR";
                else
                    return "IMPAR";
             }

             echo par_ou_impar($num);
             echo "<br>";

             $saldo = 1000;
             function sacar($valor){
                global $saldo;
                $saldo -= $valor;

                if($saldo < 0){
                    $saldo = $saldo*(-1);
                }
             }

             function depositar($valor) {
                global $saldo;
                $saldo += $valor; 
             }

             depositar(500);
             sacar(150);

             echo "Novo saldo é " .$saldo;
        ?>
    </body>
</html>