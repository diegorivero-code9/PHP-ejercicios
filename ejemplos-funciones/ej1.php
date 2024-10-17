<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function test() {
    echo"<p>Probando</p>";
}
test();
function gastos($categoria, $unidades): float {
    switch ($categoria) {
            case 1:
            $recargo=1.85;
            break;
            case 2:
            $recargo=3.05;
            break;
            case 3:
                $recargo=6.01;
                break;
            default:
                $recargo=0;
    }
    return ($recargo+$unidades+2.25);
}

echo gastos(1,4);

?>
</body>
</html>
