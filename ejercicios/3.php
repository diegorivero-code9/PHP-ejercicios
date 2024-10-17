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
        $mult=1;
       
        for($i = 0; $i < count($numeros); $i++){
            $mult*=$numeros[$i];
            


        }
        
        echo"<p>La multiplicación de los números del array es $mult</p>";

    ?>
</body>
</html>