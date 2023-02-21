<?php
    $_nome = "Matheus";
    $_sobrenome = null;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
        if (is_null($_nome)) {
            echo "O campo Nome está NULO!" . "</br>";
        } else {
            echo "Nome: " . $_nome . "</br>";
        }

        if (is_null($_sobrenome)) {
            echo "O campo Sobrenome está NULO!" . "</br>";
        } else {
            echo "Sobrenome: " . $_sobrenome . "</br>";
        }

        ?>
    </body>
</html>