<?php
function fechaIngles() {
   $fecha = date("l, j F Y  e");
   print $fecha . "<br>";
}
fechaIngles($fecha);

function factorial($n) {
   $factorial = 1;

   for($i = 1; $i <= $n; $i++){
      $factorial *= $i;
     
   }
   print($factorial);
}

factorial(3);
