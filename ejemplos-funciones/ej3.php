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
$var=2;
function duplicar(&$variable) {
    $variable*=2;
    return $variable;
}

duplicar($var);
duplicar($var);
duplicar($var);
echo duplicar($var);


?>
</body>
</html>
