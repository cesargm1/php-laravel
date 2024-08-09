<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php

    function calcDiscount($pucharse) {

    if($pucharse < 100){
        print "el precio incial es de $pucharse" . "<br>";
        print "tienes que llegar a  100 para que se aplique un descuento";
    }

    if($pucharse >= 100 && $pucharse <= 500){
        print "el precio incial es de $pucharse" . "<br>";
         $discount = $pucharse * 10 /100;
        print "se te aplica un descuento del 10%" . "<br>";
        print "la cantidad a pagar es " . $pucharse - $discount;
    }

    if($pucharse > 500){
        print "el precio incial es de $pucharse" . "<br>";
        $discount = $pucharse * 15 /100;
        print "se te aplica un descuento del 15%" . "<br>";
        print "la cantidad a pagar es " . $pucharse - $discount;
    }
    }  
    
    calcDiscount(99);

    ?>
</body>
</html>