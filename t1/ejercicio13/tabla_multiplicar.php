<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$tables = [1,2,3,4,5,6,7,8,9,10];
$numbers = [1,2,3,4,5,6,7,8,9,10];

foreach($tables as $table) {
    print($table."<br>");

    foreach($numbers as $number) {
       $resulult =  print($table * $number );
    }
}
?>
</body>
</html>
