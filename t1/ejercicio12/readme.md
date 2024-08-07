# Pasos ejercicio de copia de seguridad

1. creamos un fichero donde pondremos el contenido que queramos se llamara datos.txt
2. definimos 2 variables que seran los ficheros

```php
$file = 'datos.txt'; // fichero a copiar
$file2 = 'copia_datos.txt'; // copia de seguridad del fichero a copiar
```

3. Si el fichero existe vas a crear una variable contenido donde guardaras el contenido de la variable con **file_get_contents** que te pasen por el metodo **file_exists()**

```php
if(file_exists($file)) {
    $contenido = file_get_contents($file);
```

4. hacemos un condicional if usaremos el metodo file_put_contents() para pasarle al fichero2 **copia_datos.txt** el contenido del fichero1 que esta guardado en la variable $contenido si la condicion se cumple imprimira por pantalla El fichero se copio correctamente y si no imprimira El fichero no se copio correctamente

```php
 if(file_put_contents($file2,$contenido)){
        print 'El fichero se copio correctamente';
    } else{
        print "El fichero no se copio correctamente";
    }

}

```

## codigo completo

```php
<?php

$file = 'datos.txt';
$file2 = 'copia_datos.txt';

if(file_exists($file)) {
    $contenido = file_get_contents($file);

    if(file_put_contents($file2,$contenido)){
        print 'El fichero se copio correctamente';
    } else{
        print "El fichero no se copio correctamente";
    }

}

```

### Metodos importantes

- **file_exits(fichero)** devuelve TRUE o FALSE dependiendo de si el fichero indicado existe o no

- **readfile(fichero)** pondremos este metodo para leer el fichero desde un archivo php externo

- **file(fichero)** lee un fichero entero y devuelve un array o lista, donde en cada posición hay una
  línea del fichero

- **file_get_contents(fichero)** lee un fichero entero y lo devuelve en una cadena (no en un
  array, como la anterior)

- **file_put_contents**(fichero, texto) escribe la cadena de texto en el fichero indicado,
  sobrescribiendo su anterior contenido si lo tenía. En el caso de que no queramos sobrescribir, sino
  añadir, pondremos un tercer parámetro con la constante FILE_APPEND.

- **filesize(fichero)** devuelve el tamaño del fichero, o FALSE si no existe
