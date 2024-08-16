# Array asociativo

## Que es un array asociativo

Un array asociativo a diferencia de un array normal debemos indicar ademas de un valor una clave una clave es un identificador único para cada valor.

Para explicar un array asociativo usaremos este ejemplo.

> Antes de empezar: $\_SERVER contiene información del servidor.

```php
<?php
            $server = $_SERVER;
             foreach($server as $clave => $valor) {
                $result = print "$clave <span> <br>";
              }
            ?>
```

1. Definimos una variable serve que contendra datos del servidor.

2. Creamos un buche foreach que contendra todo el array completo dentro de la variable **$serve** definimos una \*\*$clave\*\* que sera unica que identifica a cada registro por separado usamos una fecha para separar la clave del valor y tambien asociar esa misma clave a su valor una clave siempre tendra un valor

Este ejemplo es igual pero en vez de imprimir la clave imprime el valor.

```php
 <?php
            $server = $_SERVER; // saca las variables de el servidor Ejemplo desde donde vistamos la pagina el nombre del servidor ect
             foreach($server as $clave => $valor) {
                $result = print "$valor <span> <br>";
              }
            ?>
```

> Nota: Añadi umos estilos css para que se viera mejor no los voy a poner quiero centrarme en php.

## Resultado

![tabla $_serve array asociativo](/t1/practica_2_2/tabla.png)

Como se observa en el ejemplo la clave esta a la izquierda y el valor a la derecha la clave
seria unica se vincula con la => a su valor.
