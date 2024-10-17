<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function cadenareverse($cadena) {
        $longitud = strlen($cadena);
        if ($longitud==1) {
    return $cadena;

    }else{
        return (cadenareverse(substr($cadena,1,$longitud-1))) . substr($cadena,0,1);}
    }
    $palabra="servidor";

    echo "$palabra al revés es " . cadenareverse($palabra) . "<br>";
    ?>
</body>
</html>