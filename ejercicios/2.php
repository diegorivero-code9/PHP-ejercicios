<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros=array(1,2,3);
        $suma=0;
        $i=0;
        do {echo"<p>$numeros[$i]</p>";
            $suma+=$numeros[$i];
            $i++;
            
            } while ($i <count($numeros));
        
        

    ?>
</body>
</html>