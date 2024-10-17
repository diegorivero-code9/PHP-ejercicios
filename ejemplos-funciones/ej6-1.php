<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$numero=5;
function factorial ($numero): int
{
    $total=1;
    for($i = 1; $i <= $numero; $i++){

        $total*=$i;

    }
    return $total;
}
echo "$numero! = " . factorial($numero);




?>
</body>
</html>