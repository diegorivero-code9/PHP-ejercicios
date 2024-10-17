<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <?php
        $numeros=array(1,2,3);
        $suma=0;
      
        foreach ($numeros as $numero){
                echo"<li>$numero</li>";
                $suma+= $numero;
            
            }       
        
    ?>
    </ol>
</body>
</html>