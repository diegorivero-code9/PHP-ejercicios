<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php echo "Hola!"?></h1>
   
 
    <?php
      $variable=5;
      $variale2="hola";
 
      echo"<p>El valor de variable es: $variable</p>";
      echo"<p>El valor de variable es: ". $variable . "</p>";
      echo $variable;

      echo "<h2>Tipos de datos</h2>";
      $var1=42;
      echo"<p>Var1 es de tipo ". gettype(value: $var1) ."</p>";
      $var2=3.14;
      echo "<p>Var2 es de tipo ". gettype(value: $var2) ."</p>";
      $var3= "Hola";
      echo "<p>Var3es de tipo ". gettype(value: $var3) ."</p>";
      $var4= true;
      echo "<p>Var4 es de tipo ". gettype(value: $var4) ."</p>";
      echo "<p>Var1 + Var2 = ". $var1 + (integer)$var2 ."</p>";
      ?>
    
</body>
</html>