<?php 
    $_nome = "Curso PHP Fundamental";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        <?php 
            echo "<b>Frase ORIGINAL: </b>" . $_nome . "<br>";
            // strlen - Retorna primeira ocorrencia
            echo "strlen(): " . strlen($_nome) . "<br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo "stripos(s, PHP): " . stripos($_nome, "PHP") . "<br>";

            // strripos - Retorna última ocorrência
            echo "stripos(s, a): " . stripos($_nome, "a") . "<br>";
            
            // strtolower - converte para letras min.
            echo "strtolower(): " . strtolower($_nome) . "<br>";

            // strtoupper - converte para letras min.
            echo "strtoupper(): " . strtoupper($_nome) . "<br>";

            // SUBSTR_COUNT - Conta quantas ocorreram
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo "substr_count(txt, A) ... quantas vezes aparece? Resp.: " . substr_count( strtoupper($_nome), "A");
            
        ?>
        
        
    </body>
</html>