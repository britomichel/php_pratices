<?php
    $_gasolina1 = 4.45;
    $_gasolina2 = 4.55;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        
        
        <?php
            // arredondar para media
            echo "Arredondar round($_gasolina1): " . round($_gasolina1) . "</br>";
            echo "Arredondar round($_gasolina2): " . round($_gasolina2) . "</br>";

            // arredondar para cima
            echo "Arredondar ceil($_gasolina1): " . ceil($_gasolina1) . "</br>";
            echo "Arredondar ceil($_gasolina2): " . ceil($_gasolina2) . "</br>";

            // arredondar para baixo
            echo "Arredondar floor($_gasolina1): " . floor($_gasolina1) . "</br>";
            echo "Arredondar floor($_gasolina2): " . floor($_gasolina2) . "</br>";
            
        ?>
        
        
    </body>
</html>