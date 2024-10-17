<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<table border="1">
    <tr><th>Nombre</th><th>Precio (EUR)</th></tr>
    <?php
    $productos = array(
        array("id" => 1, "name" => "Ratón", "price" => 25),
        array("id" => 2, "name" => "Teclado", "price" => 50),
        array("id" => 3, "name" => "Disco Duro", "price" => 100),
    );

    foreach ($productos as $producto){
        echo "<tr>";
        echo "<td>" . $producto["name"] . "</td>";
        echo "<td>" . $producto["price"] . "</td>";
        echo "</tr>";
    }
    ?>
</table>
</body>
</html>
</html>