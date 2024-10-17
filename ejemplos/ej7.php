<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$numeros = array(0,1,2,3,4);
$suma=0;
$i=0;
while($i<count($numeros)) {
    echo"$numeros[$i] <br>";
    $suma += $numeros[$i];
    $i++;
}
/*foreach ($numeros as $numero){
    echo"$numero <br>";
    $suma+= $numero;

}*/
echo "<p>Suma= $suma </p>";
echo 'Tamaño de $numeros= '. count(value: $numeros);

?>
</body>
</html>