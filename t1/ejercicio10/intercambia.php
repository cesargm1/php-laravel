<?php

function intercambia($a,$b, &$result){
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b; 

    print $result = $a;
    print $result = $b;
}

intercambia(10,6,$result);

/*
el parametro por referencia se pone asi &$variable modifica las variables originales $a y $b es como usar un alias
 
 */

// repasar