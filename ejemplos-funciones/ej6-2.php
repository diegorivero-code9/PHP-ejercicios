<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
$numero = 5;
$primo = true;
function primo($numero)
{

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0)
            return false;


    }
    return true;
}
if (primo($numero)){
    echo "El " . $numero . " es primo"; }
else{
    echo "El " . $numero . " no es primo";}
?>
</body>

</html>
