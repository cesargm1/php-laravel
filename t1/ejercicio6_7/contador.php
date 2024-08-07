<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
print "<h1>Contadores</h1>";
print"<p>numeros del 1 al 100 </p>";
for($i = 1; $i <= 100; $i++) {
    print "$i, <br>";
};

print"<p>numeros del 1 al 10 </p>";

$num = 10;

while($num >= 0){

    if($num != 0){
        print "$num-";

    }else{
        print 0;
    }
    $num--;
};
?> 
</body>
</html>

