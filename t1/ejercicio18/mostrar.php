<?php
$name = $_GET['name'];

print "tu nombre es $name";

$brand = $_GET ['brand'];
print "<br>";
print "La marca que elegiste es $brand";

if($brand === "Elije una marca" ) {
    $brand = "Error: No elegiste una marca" ;
}

print"<br>";

$color = $_GET['color'];


print "El color de tu coche sera $color";
?>