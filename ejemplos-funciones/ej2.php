<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Paso por referencia
function incrementar(&$numero) {
    $numero++;
    return $numero;
}
$var=0;
incrementar($var);
incrementar($var);
incrementar($var);
echo incrementar($var);


?>
</body>
</html>
