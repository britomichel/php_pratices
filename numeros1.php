<?php 
    $_salario = 4000;
    $_meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "Salario: " . $_salario . " , Meses: " . $_meses . "</br>";

            // Multiplicacao e Divisao
            echo $_meses . " meses de salario: " . ($_meses * $_salario) . "</br>";

            // Exponencial
            echo "Potenciação: " . pow(6,3) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "</br>";

            // Randômico Generica
            echo "Randômico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randômico no intervalo 1 a 6: " . rand(1,6) . "</br>";
            
            // Valor absoluto
            echo "Número absoluto: " . abs(-123) . "</br>";
            
        ?>
    </body>
</html>