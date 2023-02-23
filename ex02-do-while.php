<!DOCTYPE html>
<!-- 
    Autor: Michel Brito 
    Inspiração: baseado na aula 324 "do while" 
    do Curso Desenvolvedor Web Completo (André Fontenelle)
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sorteio de cinco números de 1 a 60.</title>
</head>
<body>
    <?php 
        $_numeros_sorteados = array();
        // fazer o Loop enquanto não incluir 5 números diferentes no Array
        do {
            $_sorteio = rand(1,60);
            // Se for um número repetido, não incluir no Array
            if (in_array($_sorteio, $_numeros_sorteados) == false) {
                $_numeros_sorteados[] = $_sorteio;
            }
        } while( count($_numeros_sorteados) < 5 )
    ?>
    <h2>Sorteio de cinco números de 1 a 60</h2>
    <pre>
        <?php
        sort($_numeros_sorteados); 
        print_r($_numeros_sorteados);
        ?>
    </pre>
</body>
</html>