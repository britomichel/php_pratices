<?php
    // Tipos de dados (int, float, String)
    $_salario = 1095;
    $_gasolina = 4.55;
    $_telefone = "55+(11)3344-5566";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // testar se é numérica
            echo "O Salário $_salario é um número: " . is_numeric($_salario) . "</br>";
            echo "A gasolina $_gasolina é um número: " . is_numeric($_gasolina) . "</br>";
            echo "O telefone $_telefone é um número: " . is_numeric($_telefone) . "</br>";

            // testar se é inteiro
            echo "O Salário $_salario é um Inteiro: " . is_int($_salario) . "</br>";
            echo "A gasolina $_gasolina é um Inteiro: " . is_int($_gasolina) . "</br>";

            // testar se é float
            echo "O Salário $_salario é um Float: " . is_float($_salario) . "</br>";
            echo "A gasolina $_gasolina é um Float: " . is_float($_gasolina) . "</br>";
        ?>
        
        
    </body>
</html>