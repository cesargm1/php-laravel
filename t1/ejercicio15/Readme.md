# Gestión de errores try catch throw new Exception

Gestionar nuestros errores es muy importante, ya que si no lo hacemos, nuestro programa podría pararse y no continuar con la ejecución con **try y catch**. Lo que hacemos es poner todo el código que creamos que va a fallar y después lanzar una excepción para después capturarla.
No te preocupes, si lo sabes, lo que es una **Excepción,** luego lo explicaremos más adelante.

## Cómo funciona paso a paso.

> Importante: La explicación paso a paso es conceptual. El código debe ejecutarse como un bloque completo para que funcione correctamente.

1. Definimos un bloque de PHP.

```php
<?php
```

2. Creamos 2 variables: el fichero original y la copia de seguridad.

```php
$file = 'datos.txt';
$file2 = 'copia_datos.txt';
```

3. Englobamos el bloque try con todo el código que creamos que dará un error.

```php
try {
    // Este bloque de codigo puede dar un Error
}
```

Esta es la sintaxis de **throw new Exception**

```php
throw new Exception('Aqui ponemos el mensaje de error que queramos');
```

4. Si el fichero datos.txt existe, continúa ejecutándote. Si no existe, me tirarás una excepción. Una excepción es un error que nosotros podemos controlar como queramos usando con el método **throw new Excepción** . Podemos poner el mensaje de error que queramos.

### Ejemplo

```php
 // Verifica si el fichero original existe
    if(!file_exists($file))
        throw new Exception('no se encuentra el fichero');
```

5. Creamos una variable **$contenido** con el **metodo file_get_contents($file)**. Lo que hará este método será obtener lo que hay dentro del fichero.
   **datos.txt**

```php
 $contenido = file_get_contents($file);
```

6. **El método file_put_contents recibe 2 parámetros (fichero que recibe el contenido, fichero original que tiene el contenido)**

Si no se ha podido copiar el contenido del fichero **datos.txt** al fichero **copia_datos.txt**, me tirarás una excepción que dirá **no se a podido copiar el contenido**

### Ejemplo

```php
 if(!file_put_contents($file2,$contenido)){
               throw new Exception('no se a podido copiar el contendo')
               }
```

7. Catch

> Importante: catch captura cualquier excepción lanzada dentro del bloque try

7. Ahora pasemos al bloque catch, que recibe 2 parámetro: la excepción capturada. En este ejemplo, hay dos posibles excepciones: **no se encuentra el fichero** y **no se ha podido copiar el contenido**. el segundo parametro sera el error que tira el catch El bloque catch imprimirá el mensaje de error correspondiente utilizando el método getMessage() de la excepción capturada.

> Importante Si alguna condicion no entra en el catch significa que el programa no contiene errores y seguira ejecutandose correctamente.

### Resultado bloque catch.

```php
} catch (Exception $e) {
    print 'se ha producido un error: ' .$e->getMessage();

}
```

### Resultado final

```php

<?php

$file = 'datos.txt';
$file2 = 'copia_datos.txt';


try {
    if(!file_exists($file)) {
        throw new Exception('no se encuentra el fichero');
        }

        $contenido = file_get_contents($file);

            if(!file_put_contents($file2,$contenido)){
               throw new Exception('no se a podido copiar el contendo');

        }

} catch (Exception $e) {
    print 'se ha producido un error: ' .$e->getMessage();

}
```

> Inportante: El codigo por separado explicando el paso a paso no funciona lo que funciona es el resultado final que se encuentra al final del documento.
