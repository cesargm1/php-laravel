<?php

function calculaDescuento($precio,$descuento = 0) {
    return ($precio * $descuento / 100);
};

print (calculaDescuento(300,50));


// parametros opcionales se definen asi $descuento = 0 si por defecto en el print no ponemos nada valdra 0