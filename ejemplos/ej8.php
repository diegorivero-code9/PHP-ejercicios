<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $dia=4;
    switch ($dia) {
        case 1: $resultado= "Lunes";
        break;
        case 2: $resultado= "Martes";
        break;
        case 3: $resultado= "Miércoles";
        break;
        case 4: $resultado= "Jueves";
        break;;
        case 5: $resultado= "Viernes";
        break;
    }

    echo "<p>hoy es <b>$resultado</b></p>";
?>
</body>
</html>