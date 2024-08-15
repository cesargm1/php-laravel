<?php

$file = 'datos.txt';
$file2 = 'copia_datos.txt';

if(file_exists($file) or die ("no se encuentra el fichero")) {
    $contenido = file_get_contents($file);

    if(file_put_contents($file2,$contenido)){
        print 'El fichero se copio correctamente';
    } else{
        print "El fichero no se copio correctamente";
    }
   
}
