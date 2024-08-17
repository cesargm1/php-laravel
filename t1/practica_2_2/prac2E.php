<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practica 5</title>
</head>
<body>
    <?php
    // a) Crea un array llamado $alumno que contenga muchos nombres de personas.

    $alumnos = ['juan','teresa','gabi','miguel angel','fran','raul'];

    // b) Muestra la cantidad de elementos que contiene el array anterior.
    print_r(count($alumnos));

    print("<br>");

    // c) Crea y muestra una cadena que contenga los nombres de l@s alumn@s existentes en el array, separados por coma y espacio (función implode()).

    var_dump(implode("," , $alumnos));

    print("<br>");


    // d) Muestra el array ordenado alfabéticamente con las claves reales de cada valor.

   natsort($alumnos);
   print_r($alumnos);
   print("<br>");

   // e) Muestra el array en el orden inverso al que fue creado (función array_reverse()). Revisar

   $arrayReverse = (array_reverse($alumnos));

   print_r ($arrayReverse);
   print("<br>");

   // f) Muestra la posición que tiene un nombre concreto que quieras encontrar.

   $key = array_search('juan',$alumnos);
   print_r($key);

   print("<br>");   

   // g) Crea un nuevo array $alumnados donde cada uno de los elementos sea otro array que contenga el id, el nombre y la edad de cada alumn@.

   $alumnados = [
    ["nombre" => "carlos","edad" => 25, "id" => 1 ],
    ["nombre" => "sara","edad" => 12, "id" => 2 ],
    ["nombre" => "pedro","edad" => 21, "id" => 3],
    ["nombre" => "carla","edad" => 17 , "id" => 4 ] 
   ];

   print_r($alumnados);

   print("<br>");   
   print("<br>");   

// h) Crea una tabla en html que se muestre todos los datos de $alumnado.

   // i) Usa la función array_column() para crear un array indexado que contenga los nombres de l@s alumn@s únicamente, y muéstralo por pantalla con print_r.

   // https://www.php.net/manual/es/function.array-column.php

   // El inice es la posicion del array

   $nombres = array_column($alumnados,'nombre');
   print_r($nombres);
   print("<br>");   

   $edades = array_column($alumnados,'edad');
   print_r($edades);
   print("<br>");   

   $ids = array_column($alumnados,'id');
   print_r($ids);
   
   print("<br>");   

    ?>
</body>
</html>