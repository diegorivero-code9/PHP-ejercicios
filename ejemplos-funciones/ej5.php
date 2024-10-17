<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function descuento($precio,$descuento=10)
{
   $precio=$precio-($precio*($descuento/100));
   echo "El precio con descuento es $precio";
}
descuento(20,15);
echo "<br>";



?>
</body>
</html>
