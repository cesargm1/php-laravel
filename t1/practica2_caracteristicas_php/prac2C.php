<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $pucharse = 501;

    if($pucharse < 100){
        print "tienes que llegar a  100 para que se aplique un descuento";
        return;
    }

    if($pucharse >= 100 && $pucharse <= 500){
        print "se te aplica un descuento del 10%";
        return;
    }

    if($pucharse > 500){
        print "se te aplica un descuento del 15%";
        return;
    }
    ?>
</body>
</html>