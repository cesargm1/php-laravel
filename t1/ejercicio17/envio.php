<?php

// Los metodos post y get reciben un array

$name = $_REQUEST ["name"];

print "<p>tu nombre es $name</p>";

$modulos = $_REQUEST ['modulos'];

foreach ($modulos as $modulo) {
    print ("<p>cursas los modulos de $modulo</p>");
    }

$send = $_REQUEST ['submit'];

?>