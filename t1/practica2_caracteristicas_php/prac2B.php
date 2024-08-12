<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar ejercicio 2</title>
</head>
<body>
    <h1>Tabla de multiplicar</h1>
    <?php

function multiplicar($n){
    for($i = 1; $i <= 10; $i++) {
        $resultado = $n * $i;
        print "$n x $i = $resultado <br>";
    }
    
  }
  
  multiplicar(12);
    ?>
</body>
</html>