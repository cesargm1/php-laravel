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