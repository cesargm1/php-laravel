<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio4</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section class="section">
        <div>
          <h2>clave</h2>
            <?php
            $server = $_SERVER;
             foreach($server as $clave => $valor) {
                $result = print "$clave <span> <br>";
              }
            ?>
        </div>

        <div>
            <h2>valor</h2>
        <?php
            $server = $_SERVER;
             foreach($server as $clave => $valor) {
                $result = print "$valor <span> <br>";
              }
            ?>
        </div>
    </section>
    <?php
     
     /*Imprimir por pantalla todo el array asociativo $_SERVER

       $server = $_SERVER;

     foreach($server as $clave => $valor) {
         $result = print "$clave => $valor<br>";
     }
     */
   
    
    ?>
</body>
</html>