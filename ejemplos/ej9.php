<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $monedas = array("Estados Unidos" => "USD",
                    "España" => "EUR",
                    "Reino Unido" => "GBP",
                    "Emiratos Árabes Unidos" => "AED");

    echo $monedas["Estados Unidos"];
    foreach($monedas as $pais => $moneda){
        echo "<li>Moneda de $pais : $moneda</li>";
    }              
                    
                    ?>
</body>
</html>